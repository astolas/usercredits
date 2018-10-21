<?php
namespace ErikKonrad\Usercredits\Controller;

class BalanceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

  /**
   * Protected Variable FrontendUserRepository wird mit NULL initialisiert.
   *
   * @var \ErikKonrad\Usercredits\Domain\Repository\FrontendUserRepository
   * @inject
   */
  protected $frontendUserRepository = NULL;


  public function listAction()
  {

    $frontendUser = $this->frontendUserRepository->findByUid($GLOBALS['TSFE']->fe_user->user['uid']);
    // $frontendUser = $GLOBALS['TSFE']->fe_user->user['uid'];
    $this->view->assign('frontend_user', $frontendUser);
  }
}
