<?php
namespace ErikKonrad\Usercredits\Domain\Model;

class FrontendUser extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
{

  /**
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ErikKonrad\Usercredits\Domain\Model\Credits>
   */
  protected $credits;
  /**
   * @var int
   */
  protected $balance;

  /**
   * Get UserCredits
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ErikKonrad\Usercredits\Domain\Model\Credits>
   */
  public function getCredits()
  {
      return $this->credits;
  }

  /**
   * Set UserCredits
   *
   * @param  \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ErikKonrad\Usercredits\Domain\Model\Credits>
   */
  public function setCredits($credits)
  {
      $this->credits = $credits;
  }

  /**
   * Get balance
   *
   * @return int
   */
  public function getBalance()
  {
    $creditArray = $this->credits;
    $balanceCount = 0;
    foreach($creditArray as $credit)
    {
      $balanceCount += $credit->getAmount();
    }
    return $balanceCount;
  }
}
