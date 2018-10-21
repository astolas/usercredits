<?php
namespace ErikKonrad\Usercredits\Domain\Model;

class Credits extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
  /**
   * title
   *
   * @var string
   */
  protected $title;

  /**
   * description
   *
   * @var string
   */
  protected $description;

  /**
   * @var int
   */
  protected $amount;



  /**
   * Get title
   *
   * @return string
   */
  public function getTitle()
  {
      return $this->title;
  }

  /**
   * Set title
   *
   * @param string $title title
   */
  public function setTitle($title)
  {
      $this->title = $title;
  }

  /**
   * Get description
   *
   * @return string
   */
  public function getDescription()
  {
      return $this->description;
  }

  /**
   * Set description
   *
   * @param string $description description
   */
  public function setDescription($description)
  {
      $this->description = $description;
  }


  /**
   * Get amount
   *
   * @return int
   */
  public function getAmount()
  {
      return $this->amount;
  }
  /**
   * Set Amount
   *
   * @param int $amount
   */
  public function setAmount($amount)
  {
      $this->amount = $amount;
  }
}
