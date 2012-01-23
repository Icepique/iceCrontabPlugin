<?php

class IceCronParser
{
  private $bits = array();
  private $now = array();
  private $lastRan = null;
  
  private $minutes_arr = array();
  private $hours_arr = array();
  private $months_arr = array();

  private $year;
  private $month;
  private $day;
  private $hour;
  private $minute;

  public function __construct($cronString = '')
  {
    if (!empty($cronString))
    {
      $this->calcLastRan($cronString);
    }
  }

  /**
   *  Calculate the last due time before this moment
   */
  public function calcLastRan($string)
  {
    $this->debug = "";
    $this->lastRan = 0;
    $this->year = NULL;
    $this->month = NULL;
    $this->day = NULL;
    $this->hour = NULL;
    $this->minute = NULL;
    $this->hours_arr = array();
    $this->minutes_arr = array();
    $this->months_arr = array();

    // Double spaces to single space
    $string = preg_replace('/[\s]{2,}/', ' ', $string);

    $this->bits = array_slice(@explode(' ', $string), 0, 5);
    
    if (preg_match('/[^-,\/* \\d]/', implode(' ', $this->bits)) !== 0)
    {
      return false;
    }

    // Put the current time into an array
    $t = strftime("%M,%H,%d,%m,%w,%Y", time());
    $this->now = explode(",", $t);
    $this->year = $this->now[5];

    $arMonths = $this->_getMonthsArray();

    do 
    {
      $this->month = array_pop($arMonths);
    } 
    while ($this->month > $this->now[3]);

    if ($this->month === NULL)
    {
      $this->year = $this->year - 1;
      $arMonths = $this->_getMonthsArray();
      $this->_prevMonth($arMonths);
    }
    elseif ($this->month == $this->now[3])
    {
      $arDays = $this->_getDaysArray($this->month, $this->year);

      do
      {
        $this->day = array_pop($arDays);
      }
      while ($this->day > $this->now[2]);

      if ($this->day === NULL)
      {
        $this->_prevMonth($arMonths);
      }
      elseif ($this->day == $this->now[2])
      {
        $arHours = $this->_getHoursArray();

        do
        {
          $this->hour = array_pop($arHours);
        }
        while ($this->hour > $this->now[1]);

        if ($this->hour === NULL)
        {
          $this->_prevDay($arDays, $arMonths);
        }
        elseif ($this->hour < $this->now[1])
        {
          $this->minute = $this->_getLastMinute();
        }
        else
        {
          $arMinutes = $this->_getMinutesArray();

          do
          {
            $this->minute = array_pop($arMinutes);
          }
          while ($this->minute > $this->now[0]);

          if ($this->minute === NULL)
          {
            $this->_prevHour($arHours, $arDays, $arMonths);
          }
        }
      }
      else
      {
        $this->hour = $this->_getLastHour();
        $this->minute = $this->_getLastMinute();
      }
    }
    else
    {
      $this->day = $this->_getLastDay($this->month, $this->year);
      if ($this->day === NULL)
      {
        // No scheduled date within this month. So we will try the previous month in the month array
        $this->_prevMonth($arMonths);
      }
      else
      {
        $this->hour = $this->_getLastHour();
        $this->minute = $this->_getLastMinute();
      }
    }

    // If the last due is beyond 1970
    if ($this->minute === NULL)
    {
      return false;
    }
    else
    {
      $this->lastRan = mktime($this->hour, $this->minute, 0, $this->month, $this->day, $this->year);

      return true;
    }
  }
  
  public function getLastRan()
  {
    return explode(",", strftime("%M,%H,%d,%m,%w,%Y", $this->lastRan));
  }

  public function getLastRanUnix()
  {
    return $this->lastRan;
  }

  // Get the due time before current month
  private function _prevMonth($arMonths)
  {
    $this->month = array_pop($arMonths);

    if ($this->month === NULL)
    {
      $this->year = $this->year - 1;
      if ($this->year > 1970)
      {
        $arMonths = $this->_getMonthsArray();
        $this->_prevMonth($arMonths);
      }
    }
    else
    {
      $this->day = $this->_getLastDay($this->month, $this->year);

      if ($this->day === NULL)
      {
        // No available date schedule in this month
        $this->_prevMonth($arMonths);
      }
      else
      {
        $this->hour = $this->_getLastHour();
        $this->minute = $this->_getLastMinute();
      }
    }
  }

  // Get the due time before current day
  private function _prevDay($arDays, $arMonths)
  {
    $this->day = array_pop($arDays);
    if ($this->day === NULL)
    {
      $this->_prevMonth($arMonths);
    }
    else
    {
      $this->hour = $this->_getLastHour();
      $this->minute = $this->_getLastMinute();
    }
  }

  // Get the due time before current hour
  private function _prevHour($arHours, $arDays, $arMonths)
  {
    $this->hour = array_pop($arHours);
    if ($this->hour === NULL)
    {
      $this->_prevDay($arDays, $arMonths);
    }
    else
    {
      $this->minute = $this->_getLastMinute();
    }
  }

  private function _getLastDay($month, $year)
  {
    //put the available days for that month into an array
    $days = $this->_getDaysArray($month, $year);
    $day = array_pop($days);

    return $day;
  }

  private function _getLastHour()
  {
    $hours = $this->_getHoursArray();
    $hour = array_pop($hours);

    return $hour;
  }

  private function _getLastMinute()
  {
    $minutes = $this->_getMinutesArray();
    $minute = array_pop($minutes);

    return $minute;
  }

  /**
   * Remove the out of range array elements. $arr should be sorted already and does not contain duplicates
   */
  private function _sanitize($arr, $low, $high)
  {
    $count = count($arr);
    for ($i = 0; $i <= ($count - 1); $i++)
    {
      if ($arr[$i] < $low)
      {
        unset($arr[$i]);
      }
      else
      {
        break;
      }
    }

    for ($i = ($count - 1); $i >= 0; $i--)
    {
      if ($arr[$i] > $high)
      {
        unset($arr[$i]);
      }
      else
      {
        break;
      }
    }

    // Re-assign keys
    sort($arr);

    return $arr;
  }

  /**
   * Given a month/year, list all the days within that month fell into the week days list.
   * 
   * @param type $month
   * @param type $year
   * 
   * @return array 
   */
  private function _getDaysArray($month, $year = 0)
  {
    if ($year == 0)
    {
      $year = $this->year;
    }

    $days = array();

    // Return everyday of the month if both bit[2] and bit[4] are '*'
    if ($this->bits[2] == '*' AND $this->bits[4] == '*')
    {
      $days = $this->_getDays($month, $year);
    }
    else
    {
      // Create an array for the weekdays
      if (substr($this->bits[4], 0, 1) == '*')
      {
        if (substr($this->bits[4], 1, 1) == '/')
        {
          $step = (int) substr($this->bits[4], 2);
        }
        else
        {
          $step = 1;
        }
      
        for ($i = 0; $i <= 6; $i += $step)
        {
          $arWeekdays[] = $i;
        }
      }
      else
      {
        $arWeekdays = $this->_expandRanges($this->bits[4]);
        $arWeekdays = $this->_sanitize($arWeekdays, 0, 7);

        // Map 7 to 0, both represents Sunday. Array is sorted already!
        if (in_array(7, $arWeekdays))
        {
          if (in_array(0, $arWeekdays))
          {
            array_pop($arWeekdays);
          }
          else
          {
            $tmp[] = 0;
            array_pop($arWeekdays);
            $arWeekdays = array_merge($tmp, $arWeekdays);
          }
        }
      }

      if ($this->bits[2] == '*')
      {
        $daysmonth = $this->_getDays($month, $year);
      }
      else
      {
        $daysmonth = $this->_expandRanges($this->bits[2]);

        // So that we do not end up with 31 of Feb
        $daysInMonth = $this->_daysInMonth($month, $year);
        $daysmonth = $this->_sanitize($daysmonth, 1, $daysInMonth);
      }

      // Now match these days with weekdays
      foreach ($daysmonth AS $day)
      {
        $wkday = date('w', mktime(0, 0, 0, $month, $day, $year));
        if (in_array($wkday, $arWeekdays))
        {
          $days[] = $day;
        }
      }
    }

    return $days;
  }

  /**
   * Given a month/year, return an array containing all the days in that month
   *
   * @param type $month
   * @param type $year
   * 
   * @return int
   */
  private function _getDays($month, $year)
  {
    $daysInMonth = $this->_daysInMonth($month, $year);
    $days = array();

    for ($i = 1; $i <= $daysInMonth; $i++)
    {
      $days[] = $i;
    }

    return $days;
  }

  private function _getHoursArray()
  {
    if (empty($this->hours_arr))
    {
      $hours = array();
      
      if (substr($this->bits[1], 0, 1) == '*')
      {
        if (substr($this->bits[1], 1, 1) == '/')
        {
          $step = (int) substr($this->bits[1], 2);
        }
        else
        {
          $step = 1;
        }
      
        for ($i = 0; $i <= 23; $i += $step)
        {
          $hours[] = $i;
        }
      }
      else
      {
        $hours = $this->_expandRanges($this->bits[1]);
        $hours = $this->_sanitize($hours, 0, 23);
      }

      $this->hours_arr = $hours;
    }

    return $this->hours_arr;
  }

  private function _getMinutesArray()
  {
    if (empty($this->minutes_arr))
    {
      $minutes = array();

      if (substr($this->bits[0], 0, 1) == '*')
      {
        if (substr($this->bits[0], 1, 1) == '/')
        {
          $step = (int) substr($this->bits[0], 2);
        }
        else
        {
          $step = 1;
        }
        
        for ($i = 0; $i <= 60; $i += $step)
        {
          $minutes[] = $i;
        }
      }
      else
      {
        $minutes = $this->_expandRanges($this->bits[0]);
        $minutes = $this->_sanitize($minutes, 0, 59);
      }

      $this->minutes_arr = $minutes;
    }

    return $this->minutes_arr;
  }

  private function _getMonthsArray()
  {
    if (empty($this->months_arr))
    {
      $months = array();
      
      if (substr($this->bits[3], 0, 1) == '*')
      {
        if (substr($this->bits[3], 1, 1) == '/')
        {
          $step = (int) substr($this->bits[3], 2);
        }
        else
        {
          $step = 1;
        }
      
        for ($i = 1; $i <= 12; $i += $step)
        {
          $months[] = $i;
        }
      }
      else
      {
        $months = $this->_expandRanges($this->bits[3]);
        $months = $this->_sanitize($months, 1, 12);
      }

      $this->months_arr = $months;
    }

    return $this->months_arr;
  }
  
  private function _daysInMonth($month, $year)
  {
    return date('t', mktime(0, 0, 0, $month, 1, $year));
  }

  /**
   * Assumes that value is not *, and creates an array of valid numbers that the string represents.
   * 
   * @param string $str
   * @return array
   */
  private function _expandRanges($str)
  {
    if (strstr($str, ","))
    {
      $arParts = explode(',', $str);
      foreach ($arParts AS $part)
      {
        if (strstr($part, '-'))
        {
          $arRange = explode('-', $part);
          for ($i = $arRange[0]; $i <= $arRange[1]; $i++)
          {
            $ret[] = $i;
          }
        }
        else
        {
          $ret[] = $part;
        }
      }
    }
    elseif (strstr($str, '-'))
    {
      $arRange = explode('-', $str);
      for ($i = $arRange[0]; $i <= $arRange[1]; $i++)
      {
        $ret[] = $i;
      }
    }
    else
    {
      $ret[] = $str;
    }

    $ret = array_unique($ret);
    sort($ret);

    return $ret;
  }
}
