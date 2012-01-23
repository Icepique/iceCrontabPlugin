<?php

class cronJobsQueueTask extends IceBaseTask
{
  protected function configure()
  {
    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name', 'frontend'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'propel'),
      new sfCommandOption('context', null, sfCommandOption::PARAMETER_REQUIRED, 'The job queue context name', 'global')
    ));

    $this->namespace        = 'cron';
    $this->name             = 'jobs';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [cron:jobs|INFO] task runs every minute simulating the Crontab
Call it with:

  [php symfony cron:jobs|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    // Initialize the database connection
    $databaseManager = new sfDatabaseManager($this->configuration);
    $databaseManager->getDatabase($options['connection'])->getConnection();

    sfContext::createInstance($this->configuration);

    // Get the Gearman client
    $client = IceJobQueue::getGearmanClient(true);

    $parser = new IceCronParser('* * * * *');
    $time = $parser->getLastRan();

    $q = iceModelCrontabQuery::create()
       ->filterByIsActive(true)
       ->filterByContext($options['context'])
       ->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);

    if ($crons = $q->find())
    {
      /** @var $cron iceModelCrontab */
      foreach ($crons as $cron)
      {
        if ($parser->calcLastRan((string) $cron) && ($time === $parser->getLastRan()))
        {
          $cron->run($client);
        }
      }
    }

    $client->runTasks();
  }
}
