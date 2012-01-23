<?php

require 'plugins/iceCrontabPlugin/lib/model/om/BaseiceModelCrontab.php';


/**
 * Skeleton subclass for representing a row from the 'crontab' table.
 *
 * @package    propel.generator.plugins.iceCrontabPlugin.lib.model
 */
class iceModelCrontab extends BaseiceModelCrontab
{
  public function __toString()
  {
    $string = sprintf(
      '%s %s %s %s %s',
      $this->getMinute(), $this->getHour(), $this->getMonth(), $this->getDayOfWeek(), $this->getDayOfMonth()
    );

    $string .= ' '. $this->getFunctionName();

    return (string) $string;
  }

  public function getParameters()
  {
    $parameters = json_decode(parent::getParameters());

    return array_merge((array) $parameters, array('time' => time()));
  }

  /**
   * Schedule the Crontab in the Job Queue
   *
   * @param  GearmanClient  $client
   * @param  boolean        $run_task
   *
   * @return GearmanClient
   */
  public function run(GearmanClient $client = null, $run_task = null)
  {
    if ($client === null)
    {
      $client = IceJobQueue::getGearmanClient(true);
      $run_task = ($run_task === null) ? true : $run_task;
    }

    switch ($this->getPriority())
    {
      case IceJobQueue::PRIORITY_HIGH:
        $method = 'addTaskHigh';
        break;
      case IceJobQueue::PRIORITY_NORMAL:
        $method = 'addTask';
        break;
      case IceJobQueue::PRIORITY_LOW:
      default:
        $method = 'addTaskLow';
        break;
    }

    // Queue the task
    $task = call_user_func_array(
      array($client, $method),
      array($this->getFunctionName(), (string) @json_encode($this->getParameters()), $this->getContext())
    );

    // Create a CrontabRun record for keeping track of the progress
    if ($task instanceof GearmanTask)
    {
      /** @var $task GearmanTask */

      $job_run = new iceModelJobRun();
      $job_run->setContext($this->getContext());
      $job_run->setCrontabId($this->getId());
      $job_run->setUniqueKey($task->unique());
      $job_run->setJobHandle($task->jobHandle());
      $job_run->setFunctionName($this->getFunctionName());
      $job_run->setPriority($this->getPriority());
      $job_run->save();
    }

    if ($run_task === true)
    {
      $client->runTasks();
    }

    return $client;
  }
}
