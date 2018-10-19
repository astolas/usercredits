<?php
namespace ErikKonrad\Usercredits\Controller;

class BalanceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

  public function listAction()
  {
    $this->view->assign('hello_world', 'Hello World');
  }
}
