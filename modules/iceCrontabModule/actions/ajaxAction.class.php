<?php

class ajaxAction extends IceAjaxAction
{
  protected function getObject(sfWebRequest $request)
  {
    $crontab = new iceModelCrontab();

    if ($request->getParameter('id'))
    {
      $crontab = iceModelCrontabPeer::retrieveByPK($request->getParameter('id'));
    }
    
    return $crontab;
  }

  /**
   * @param sfWebRequest $request
   * @return sfView::NONE
   */
  protected function executeRun(sfWebRequest $request, $template)
  {
    $this->forward404if(!$this->object || $this->object->isNew());

    // Add the crontab to the Job Queue without running the task
    $client = $this->object->run(null, false);

    // Free the web browser from this request
    $this->success(true);

    // Finally add the task to the running Job Queue
    $client->runTasks();

    return sfView::NONE;
  }
}
