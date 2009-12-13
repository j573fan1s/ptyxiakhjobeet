<?php
// apps/frontend/modules/job/actions/actions.class.php

/**
 * job actions.
 *
 * @package    jobeet
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->JobeetJobs = Doctrine::getTable('JobeetJob')
      ->createQuery('a')
      ->execute();
  }

//   public function executeShow(sfWebRequest $request)
//   {
//     $this->JobeetJob = Doctrine::getTable('JobeetJob')->find(array($request->getParameter('id')));
//     $this->forward404Unless($this->JobeetJob);
//   }

public function executeShow(sfWebRequest $request)
{
  $this->JobeetJob = Doctrine::getTable('JobeetJob')-> find($request->getParameter('id'));
  $this->forward404Unless($this->JobeetJob);
}


  public function executeNew(sfWebRequest $request)
  {
    $this->form = new JobeetJobForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new JobeetJobForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($JobeetJob = Doctrine::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object JobeetJob does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetJobForm($JobeetJob);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($JobeetJob = Doctrine::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object JobeetJob does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetJobForm($JobeetJob);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($JobeetJob = Doctrine::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object JobeetJob does not exist (%s).', $request->getParameter('id')));
    $JobeetJob->delete();

    $this->redirect('job/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $JobeetJob = $form->save();

      $this->redirect('job/edit?id='.$JobeetJob->getId());
    }
  }
}
