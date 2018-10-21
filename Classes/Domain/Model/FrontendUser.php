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
  public function setTxUsercreditsDomainModelCredits($credits)
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
      \TYPO3\CMS\Core\Utility\DebugUtility::var_dump($balance);
      $balanceArray = $this->getCredits();
      $balance = 0;
      foreach($balanceArray as $creditItem)
      {
        $balance = $balance + $creditItem['amount'];
      }

      return $this->$balance;
  }
}
