<?php


/**
 * Base class that represents a row from the 'crontab' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceCrontabPlugin.lib.model.om
 */
abstract class BaseiceModelCrontab extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'iceModelCrontabPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        iceModelCrontabPeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the context field.
   * Note: this column has a database default value of: 'global'
   * @var        string
   */
  protected $context;

  /**
   * The value for the minute field.
   * Note: this column has a database default value of: '1'
   * @var        string
   */
  protected $minute;

  /**
   * The value for the hour field.
   * Note: this column has a database default value of: '5'
   * @var        string
   */
  protected $hour;

  /**
   * The value for the month field.
   * Note: this column has a database default value of: '*'
   * @var        string
   */
  protected $month;

  /**
   * The value for the day_of_week field.
   * Note: this column has a database default value of: '*'
   * @var        string
   */
  protected $day_of_week;

  /**
   * The value for the day_of_month field.
   * Note: this column has a database default value of: '*'
   * @var        string
   */
  protected $day_of_month;

  /**
   * The value for the function_name field.
   * @var        string
   */
  protected $function_name;

  /**
   * The value for the parameters field.
   * @var        string
   */
  protected $parameters;

  /**
   * The value for the description field.
   * @var        string
   */
  protected $description;

  /**
   * The value for the priority field.
   * Note: this column has a database default value of: 1
   * @var        int
   */
  protected $priority;

  /**
   * The value for the is_active field.
   * Note: this column has a database default value of: true
   * @var        boolean
   */
  protected $is_active;

  /**
   * The value for the updated_at field.
   * @var        string
   */
  protected $updated_at;

  /**
   * The value for the created_at field.
   * @var        string
   */
  protected $created_at;

  /**
   * Flag to prevent endless save loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInSave = false;

  /**
   * Flag to prevent endless validation loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInValidation = false;

  /**
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->context = 'global';
    $this->minute = '1';
    $this->hour = '5';
    $this->month = '*';
    $this->day_of_week = '*';
    $this->day_of_month = '*';
    $this->priority = 1;
    $this->is_active = true;
  }

  /**
   * Initializes internal state of BaseiceModelCrontab object.
   * @see        applyDefaults()
   */
  public function __construct()
  {
    parent::__construct();
    $this->applyDefaultValues();
  }

  /**
   * Get the [id] column value.
   * 
   * @return     int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the [context] column value.
   * 
   * @return     string
   */
  public function getContext()
  {
    return $this->context;
  }

  /**
   * Get the [minute] column value.
   * 
   * @return     string
   */
  public function getMinute()
  {
    return $this->minute;
  }

  /**
   * Get the [hour] column value.
   * 
   * @return     string
   */
  public function getHour()
  {
    return $this->hour;
  }

  /**
   * Get the [month] column value.
   * 
   * @return     string
   */
  public function getMonth()
  {
    return $this->month;
  }

  /**
   * Get the [day_of_week] column value.
   * 
   * @return     string
   */
  public function getDayOfWeek()
  {
    return $this->day_of_week;
  }

  /**
   * Get the [day_of_month] column value.
   * 
   * @return     string
   */
  public function getDayOfMonth()
  {
    return $this->day_of_month;
  }

  /**
   * Get the [function_name] column value.
   * 
   * @return     string
   */
  public function getFunctionName()
  {
    return $this->function_name;
  }

  /**
   * Get the [parameters] column value.
   * 
   * @return     string
   */
  public function getParameters()
  {
    return $this->parameters;
  }

  /**
   * Get the [description] column value.
   * 
   * @return     string
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Get the [priority] column value.
   * 
   * @return     int
   */
  public function getPriority()
  {
    return $this->priority;
  }

  /**
   * Get the [is_active] column value.
   * 
   * @return     boolean
   */
  public function getIsActive()
  {
    return $this->is_active;
  }

  /**
   * Get the [optionally formatted] temporal [updated_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getUpdatedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->updated_at === null)
    {
      return null;
    }


    if ($this->updated_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->updated_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
      }
    }

    if ($format === null)
    {
      // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
      return $dt;
    }
    elseif (strpos($format, '%') !== false)
    {
      return strftime($format, $dt->format('U'));
    }
    else
    {
      return $dt->format($format);
    }
  }

  /**
   * Get the [optionally formatted] temporal [created_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getCreatedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->created_at === null)
    {
      return null;
    }


    if ($this->created_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->created_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
      }
    }

    if ($format === null)
    {
      // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
      return $dt;
    }
    elseif (strpos($format, '%') !== false)
    {
      return strftime($format, $dt->format('U'));
    }
    else
    {
      return $dt->format($format);
    }
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->id !== $v)
    {
      $this->id = $v;
      $this->modifiedColumns[] = iceModelCrontabPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [context] column.
   * 
   * @param      string $v new value
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setContext($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->context !== $v)
    {
      $this->context = $v;
      $this->modifiedColumns[] = iceModelCrontabPeer::CONTEXT;
    }

    return $this;
  }

  /**
   * Set the value of [minute] column.
   * 
   * @param      string $v new value
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setMinute($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->minute !== $v)
    {
      $this->minute = $v;
      $this->modifiedColumns[] = iceModelCrontabPeer::MINUTE;
    }

    return $this;
  }

  /**
   * Set the value of [hour] column.
   * 
   * @param      string $v new value
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setHour($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->hour !== $v)
    {
      $this->hour = $v;
      $this->modifiedColumns[] = iceModelCrontabPeer::HOUR;
    }

    return $this;
  }

  /**
   * Set the value of [month] column.
   * 
   * @param      string $v new value
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setMonth($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->month !== $v)
    {
      $this->month = $v;
      $this->modifiedColumns[] = iceModelCrontabPeer::MONTH;
    }

    return $this;
  }

  /**
   * Set the value of [day_of_week] column.
   * 
   * @param      string $v new value
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setDayOfWeek($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->day_of_week !== $v)
    {
      $this->day_of_week = $v;
      $this->modifiedColumns[] = iceModelCrontabPeer::DAY_OF_WEEK;
    }

    return $this;
  }

  /**
   * Set the value of [day_of_month] column.
   * 
   * @param      string $v new value
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setDayOfMonth($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->day_of_month !== $v)
    {
      $this->day_of_month = $v;
      $this->modifiedColumns[] = iceModelCrontabPeer::DAY_OF_MONTH;
    }

    return $this;
  }

  /**
   * Set the value of [function_name] column.
   * 
   * @param      string $v new value
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setFunctionName($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->function_name !== $v)
    {
      $this->function_name = $v;
      $this->modifiedColumns[] = iceModelCrontabPeer::FUNCTION_NAME;
    }

    return $this;
  }

  /**
   * Set the value of [parameters] column.
   * 
   * @param      string $v new value
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setParameters($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->parameters !== $v)
    {
      $this->parameters = $v;
      $this->modifiedColumns[] = iceModelCrontabPeer::PARAMETERS;
    }

    return $this;
  }

  /**
   * Set the value of [description] column.
   * 
   * @param      string $v new value
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setDescription($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->description !== $v)
    {
      $this->description = $v;
      $this->modifiedColumns[] = iceModelCrontabPeer::DESCRIPTION;
    }

    return $this;
  }

  /**
   * Set the value of [priority] column.
   * 
   * @param      int $v new value
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setPriority($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->priority !== $v)
    {
      $this->priority = $v;
      $this->modifiedColumns[] = iceModelCrontabPeer::PRIORITY;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_active] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setIsActive($v)
  {
    if ($v !== null)
    {
      if (is_string($v))
      {
        $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
      }
      else
      {
        $v = (boolean) $v;
      }
    }

    if ($this->is_active !== $v)
    {
      $this->is_active = $v;
      $this->modifiedColumns[] = iceModelCrontabPeer::IS_ACTIVE;
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setUpdatedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->updated_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->updated_at = $newDateAsString;
        $this->modifiedColumns[] = iceModelCrontabPeer::UPDATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     iceModelCrontab The current object (for fluent API support)
   */
  public function setCreatedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->created_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->created_at = $newDateAsString;
        $this->modifiedColumns[] = iceModelCrontabPeer::CREATED_AT;
      }
    }

    return $this;
  }

  /**
   * Indicates whether the columns in this object are only set to default values.
   *
   * This method can be used in conjunction with isModified() to indicate whether an object is both
   * modified _and_ has some values set which are non-default.
   *
   * @return     boolean Whether the columns in this object are only been set with default values.
   */
  public function hasOnlyDefaultValues()
  {
      if ($this->context !== 'global')
      {
        return false;
      }

      if ($this->minute !== '1')
      {
        return false;
      }

      if ($this->hour !== '5')
      {
        return false;
      }

      if ($this->month !== '*')
      {
        return false;
      }

      if ($this->day_of_week !== '*')
      {
        return false;
      }

      if ($this->day_of_month !== '*')
      {
        return false;
      }

      if ($this->priority !== 1)
      {
        return false;
      }

      if ($this->is_active !== true)
      {
        return false;
      }

    // otherwise, everything was equal, so return TRUE
    return true;
  }

  /**
   * Hydrates (populates) the object variables with values from the database resultset.
   *
   * An offset (0-based "start column") is specified so that objects can be hydrated
   * with a subset of the columns in the resultset rows.  This is needed, for example,
   * for results of JOIN queries where the resultset row includes columns from two or
   * more tables.
   *
   * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
   * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
   * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
   * @return     int next starting column
   * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
   */
  public function hydrate($row, $startcol = 0, $rehydrate = false)
  {
    try
    {

      $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
      $this->context = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->minute = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->hour = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->month = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->day_of_week = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->day_of_month = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->function_name = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->parameters = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->description = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
      $this->priority = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
      $this->is_active = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
      $this->updated_at = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
      $this->created_at = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 14; // 14 = iceModelCrontabPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating iceModelCrontab object", $e);
    }
  }

  /**
   * Checks and repairs the internal consistency of the object.
   *
   * This method is executed after an already-instantiated object is re-hydrated
   * from the database.  It exists to check any foreign keys to make sure that
   * the objects related to the current object are correct based on foreign key.
   *
   * You can override this method in the stub class, but you should always invoke
   * the base method from the overridden method (i.e. parent::ensureConsistency()),
   * in case your model changes.
   *
   * @throws     PropelException
   */
  public function ensureConsistency()
  {

  }

  /**
   * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
   *
   * This will only work if the object has been saved and has a valid primary key set.
   *
   * @param      boolean $deep (optional) Whether to also de-associated any related objects.
   * @param      PropelPDO $con (optional) The PropelPDO connection to use.
   * @return     void
   * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
   */
  public function reload($deep = false, PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("Cannot reload a deleted object.");
    }

    if ($this->isNew())
    {
      throw new PropelException("Cannot reload an unsaved object.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCrontabPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = iceModelCrontabPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

    }
  }

  /**
   * Removes this object from datastore and sets delete attribute.
   *
   * @param      PropelPDO $con
   * @return     void
   * @throws     PropelException
   * @see        BaseObject::setDeleted()
   * @see        BaseObject::isDeleted()
   */
  public function delete(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("This object has already been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCrontabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = iceModelCrontabQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelCrontab:delete:pre') as $callable)
      {
        if (call_user_func($callable, $this, $con))
        {
          $con->commit();
          return;
        }
      }

      if ($ret)
      {
        $deleteQuery->delete($con);
        $this->postDelete($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelCrontab:delete:post') as $callable)
        {
          call_user_func($callable, $this, $con);
        }

        $con->commit();
        $this->setDeleted(true);
      }
      else
      {
        $con->commit();
      }
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Persists this object to the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All modified related objects will also be persisted in the doSave()
   * method.  This method wraps all precipitate database operations in a
   * single transaction.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        doSave()
   */
  public function save(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("You cannot save an object that has been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCrontabPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelCrontab:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      // symfony_timestampable behavior
      if ($this->isModified() && !$this->isColumnModified(iceModelCrontabPeer::UPDATED_AT))
      {
        $this->setUpdatedAt(time());
      }
      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
        // symfony_timestampable behavior
        if (!$this->isColumnModified(iceModelCrontabPeer::CREATED_AT))
        {
          $this->setCreatedAt(time());
        }

      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
      }
      if ($ret)
      {
        $affectedRows = $this->doSave($con);
        if ($isInsert)
        {
          $this->postInsert($con);
        }
        else
        {
          $this->postUpdate($con);
        }
        $this->postSave($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelCrontab:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        iceModelCrontabPeer::addInstanceToPool($this);
      }
      else
      {
        $affectedRows = 0;
      }
      $con->commit();
      return $affectedRows;
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Performs the work of inserting or updating the row in the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All related objects are also updated in this method.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        save()
   */
  protected function doSave(PropelPDO $con)
  {
    $affectedRows = 0; // initialize var to track total num of affected rows
    if (!$this->alreadyInSave)
    {
      $this->alreadyInSave = true;

      if ($this->isNew() )
      {
        $this->modifiedColumns[] = iceModelCrontabPeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(iceModelCrontabPeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.iceModelCrontabPeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows = 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows = iceModelCrontabPeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
      }

      $this->alreadyInSave = false;

    }
    return $affectedRows;
  }

  /**
   * Array of ValidationFailed objects.
   * @var        array ValidationFailed[]
   */
  protected $validationFailures = array();

  /**
   * Gets any ValidationFailed objects that resulted from last call to validate().
   *
   *
   * @return     array ValidationFailed[]
   * @see        validate()
   */
  public function getValidationFailures()
  {
    return $this->validationFailures;
  }

  /**
   * Validates the objects modified field values and all objects related to this table.
   *
   * If $columns is either a column name or an array of column names
   * only those columns are validated.
   *
   * @param      mixed $columns Column name or an array of column names.
   * @return     boolean Whether all columns pass validation.
   * @see        doValidate()
   * @see        getValidationFailures()
   */
  public function validate($columns = null)
  {
    $res = $this->doValidate($columns);
    if ($res === true)
    {
      $this->validationFailures = array();
      return true;
    }
    else
    {
      $this->validationFailures = $res;
      return false;
    }
  }

  /**
   * This function performs the validation work for complex object models.
   *
   * In addition to checking the current object, all related objects will
   * also be validated.  If all pass then <code>true</code> is returned; otherwise
   * an aggreagated array of ValidationFailed objects will be returned.
   *
   * @param      array $columns Array of column names to validate.
   * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
   */
  protected function doValidate($columns = null)
  {
    if (!$this->alreadyInValidation)
    {
      $this->alreadyInValidation = true;
      $retval = null;

      $failureMap = array();


      if (($retval = iceModelCrontabPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }



      $this->alreadyInValidation = false;
    }

    return (!empty($failureMap) ? $failureMap : true);
  }

  /**
   * Retrieves a field from the object by name passed in as a string.
   *
   * @param      string $name name
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     mixed Value of field.
   */
  public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelCrontabPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    $field = $this->getByPosition($pos);
    return $field;
  }

  /**
   * Retrieves a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @return     mixed Value of field at $pos
   */
  public function getByPosition($pos)
  {
    switch($pos)
    {
      case 0:
        return $this->getId();
        break;
      case 1:
        return $this->getContext();
        break;
      case 2:
        return $this->getMinute();
        break;
      case 3:
        return $this->getHour();
        break;
      case 4:
        return $this->getMonth();
        break;
      case 5:
        return $this->getDayOfWeek();
        break;
      case 6:
        return $this->getDayOfMonth();
        break;
      case 7:
        return $this->getFunctionName();
        break;
      case 8:
        return $this->getParameters();
        break;
      case 9:
        return $this->getDescription();
        break;
      case 10:
        return $this->getPriority();
        break;
      case 11:
        return $this->getIsActive();
        break;
      case 12:
        return $this->getUpdatedAt();
        break;
      case 13:
        return $this->getCreatedAt();
        break;
      default:
        return null;
        break;
    }
  }

  /**
   * Exports the object as an array.
   *
   * You can specify the key type of the array by passing one of the class
   * type constants.
   *
   * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   *                    Defaults to BasePeer::TYPE_PHPNAME.
   * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
   * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
   *
   * @return    array an associative array containing the field names (as keys) and field values
   */
  public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
  {
    if (isset($alreadyDumpedObjects['iceModelCrontab'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['iceModelCrontab'][$this->getPrimaryKey()] = true;
    $keys = iceModelCrontabPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getContext(),
      $keys[2] => $this->getMinute(),
      $keys[3] => $this->getHour(),
      $keys[4] => $this->getMonth(),
      $keys[5] => $this->getDayOfWeek(),
      $keys[6] => $this->getDayOfMonth(),
      $keys[7] => $this->getFunctionName(),
      $keys[8] => $this->getParameters(),
      $keys[9] => $this->getDescription(),
      $keys[10] => $this->getPriority(),
      $keys[11] => $this->getIsActive(),
      $keys[12] => $this->getUpdatedAt(),
      $keys[13] => $this->getCreatedAt(),
    );
    return $result;
  }

  /**
   * Sets a field from the object by name passed in as a string.
   *
   * @param      string $name peer name
   * @param      mixed $value field value
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     void
   */
  public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelCrontabPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    return $this->setByPosition($pos, $value);
  }

  /**
   * Sets a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @param      mixed $value field value
   * @return     void
   */
  public function setByPosition($pos, $value)
  {
    switch($pos)
    {
      case 0:
        $this->setId($value);
        break;
      case 1:
        $this->setContext($value);
        break;
      case 2:
        $this->setMinute($value);
        break;
      case 3:
        $this->setHour($value);
        break;
      case 4:
        $this->setMonth($value);
        break;
      case 5:
        $this->setDayOfWeek($value);
        break;
      case 6:
        $this->setDayOfMonth($value);
        break;
      case 7:
        $this->setFunctionName($value);
        break;
      case 8:
        $this->setParameters($value);
        break;
      case 9:
        $this->setDescription($value);
        break;
      case 10:
        $this->setPriority($value);
        break;
      case 11:
        $this->setIsActive($value);
        break;
      case 12:
        $this->setUpdatedAt($value);
        break;
      case 13:
        $this->setCreatedAt($value);
        break;
    }
  }

  /**
   * Populates the object using an array.
   *
   * This is particularly useful when populating an object from one of the
   * request arrays (e.g. $_POST).  This method goes through the column
   * names, checking to see whether a matching key exists in populated
   * array. If so the setByName() method is called for that column.
   *
   * You can specify the key type of the array by additionally passing one
   * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   * The default key type is the column's phpname (e.g. 'AuthorId')
   *
   * @param      array  $arr     An array to populate the object from.
   * @param      string $keyType The type of keys the array uses.
   * @return     void
   */
  public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
  {
    $keys = iceModelCrontabPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setContext($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setMinute($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setHour($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setMonth($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setDayOfWeek($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setDayOfMonth($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setFunctionName($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setParameters($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setDescription($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setPriority($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setIsActive($arr[$keys[11]]);
    if (array_key_exists($keys[12], $arr)) $this->setUpdatedAt($arr[$keys[12]]);
    if (array_key_exists($keys[13], $arr)) $this->setCreatedAt($arr[$keys[13]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(iceModelCrontabPeer::DATABASE_NAME);

    if ($this->isColumnModified(iceModelCrontabPeer::ID)) $criteria->add(iceModelCrontabPeer::ID, $this->id);
    if ($this->isColumnModified(iceModelCrontabPeer::CONTEXT)) $criteria->add(iceModelCrontabPeer::CONTEXT, $this->context);
    if ($this->isColumnModified(iceModelCrontabPeer::MINUTE)) $criteria->add(iceModelCrontabPeer::MINUTE, $this->minute);
    if ($this->isColumnModified(iceModelCrontabPeer::HOUR)) $criteria->add(iceModelCrontabPeer::HOUR, $this->hour);
    if ($this->isColumnModified(iceModelCrontabPeer::MONTH)) $criteria->add(iceModelCrontabPeer::MONTH, $this->month);
    if ($this->isColumnModified(iceModelCrontabPeer::DAY_OF_WEEK)) $criteria->add(iceModelCrontabPeer::DAY_OF_WEEK, $this->day_of_week);
    if ($this->isColumnModified(iceModelCrontabPeer::DAY_OF_MONTH)) $criteria->add(iceModelCrontabPeer::DAY_OF_MONTH, $this->day_of_month);
    if ($this->isColumnModified(iceModelCrontabPeer::FUNCTION_NAME)) $criteria->add(iceModelCrontabPeer::FUNCTION_NAME, $this->function_name);
    if ($this->isColumnModified(iceModelCrontabPeer::PARAMETERS)) $criteria->add(iceModelCrontabPeer::PARAMETERS, $this->parameters);
    if ($this->isColumnModified(iceModelCrontabPeer::DESCRIPTION)) $criteria->add(iceModelCrontabPeer::DESCRIPTION, $this->description);
    if ($this->isColumnModified(iceModelCrontabPeer::PRIORITY)) $criteria->add(iceModelCrontabPeer::PRIORITY, $this->priority);
    if ($this->isColumnModified(iceModelCrontabPeer::IS_ACTIVE)) $criteria->add(iceModelCrontabPeer::IS_ACTIVE, $this->is_active);
    if ($this->isColumnModified(iceModelCrontabPeer::UPDATED_AT)) $criteria->add(iceModelCrontabPeer::UPDATED_AT, $this->updated_at);
    if ($this->isColumnModified(iceModelCrontabPeer::CREATED_AT)) $criteria->add(iceModelCrontabPeer::CREATED_AT, $this->created_at);

    return $criteria;
  }

  /**
   * Builds a Criteria object containing the primary key for this object.
   *
   * Unlike buildCriteria() this method includes the primary key values regardless
   * of whether or not they have been modified.
   *
   * @return     Criteria The Criteria object containing value(s) for primary key(s).
   */
  public function buildPkeyCriteria()
  {
    $criteria = new Criteria(iceModelCrontabPeer::DATABASE_NAME);
    $criteria->add(iceModelCrontabPeer::ID, $this->id);

    return $criteria;
  }

  /**
   * Returns the primary key for this object (row).
   * @return     int
   */
  public function getPrimaryKey()
  {
    return $this->getId();
  }

  /**
   * Generic method to set the primary key (id column).
   *
   * @param      int $key Primary key.
   * @return     void
   */
  public function setPrimaryKey($key)
  {
    $this->setId($key);
  }

  /**
   * Returns true if the primary key for this object is null.
   * @return     boolean
   */
  public function isPrimaryKeyNull()
  {
    return null === $this->getId();
  }

  /**
   * Sets contents of passed object to values from current object.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      object $copyObj An object of iceModelCrontab (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setContext($this->getContext());
    $copyObj->setMinute($this->getMinute());
    $copyObj->setHour($this->getHour());
    $copyObj->setMonth($this->getMonth());
    $copyObj->setDayOfWeek($this->getDayOfWeek());
    $copyObj->setDayOfMonth($this->getDayOfMonth());
    $copyObj->setFunctionName($this->getFunctionName());
    $copyObj->setParameters($this->getParameters());
    $copyObj->setDescription($this->getDescription());
    $copyObj->setPriority($this->getPriority());
    $copyObj->setIsActive($this->getIsActive());
    $copyObj->setUpdatedAt($this->getUpdatedAt());
    $copyObj->setCreatedAt($this->getCreatedAt());
    if ($makeNew)
    {
      $copyObj->setNew(true);
      $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
    }
  }

  /**
   * Makes a copy of this object that will be inserted as a new row in table when saved.
   * It creates a new object filling in the simple attributes, but skipping any primary
   * keys that are defined for the table.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @return     iceModelCrontab Clone of current object.
   * @throws     PropelException
   */
  public function copy($deepCopy = false)
  {
    // we use get_class(), because this might be a subclass
    $clazz = get_class($this);
    $copyObj = new $clazz();
    $this->copyInto($copyObj, $deepCopy);
    return $copyObj;
  }

  /**
   * Returns a peer instance associated with this om.
   *
   * Since Peer classes are not to have any instance attributes, this method returns the
   * same instance for all member of this class. The method could therefore
   * be static, but this would prevent one from overriding the behavior.
   *
   * @return     iceModelCrontabPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new iceModelCrontabPeer();
    }
    return self::$peer;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->context = null;
    $this->minute = null;
    $this->hour = null;
    $this->month = null;
    $this->day_of_week = null;
    $this->day_of_month = null;
    $this->function_name = null;
    $this->parameters = null;
    $this->description = null;
    $this->priority = null;
    $this->is_active = null;
    $this->updated_at = null;
    $this->created_at = null;
    $this->alreadyInSave = false;
    $this->alreadyInValidation = false;
    $this->clearAllReferences();
    $this->applyDefaultValues();
    $this->resetModified();
    $this->setNew(true);
    $this->setDeleted(false);
  }

  /**
   * Resets all references to other model objects or collections of model objects.
   *
   * This method is a user-space workaround for PHP's inability to garbage collect
   * objects with circular references (even in PHP 5.3). This is currently necessary
   * when using Propel in certain daemon or large-volumne/high-memory operations.
   *
   * @param      boolean $deep Whether to also clear the references on all referrer objects.
   */
  public function clearAllReferences($deep = false)
  {
    if ($deep)
    {
    }

  }

  /**
   * Return the string representation of this object
   *
   * @return string The value of the 'function_name' column
   */
  public function __toString()
  {
    return (string) $this->getFunctionName();
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseiceModelCrontab:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
