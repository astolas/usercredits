<?php
defined('TYPO3_MODE') or die();


$GLOBALS['TCA']['fe_users']['columns']['credits'] = [
  'label' => 'User Credits',
  'config' => [
    'type' => 'inline',
    // 'internal_type' => 'db',
    // 'allowed' => 'tx_usercredits_domain_model_credits',
    'foreign_table' => 'tx_usercredits_domain_model_credits',
    'foreign_field' => 'fe_users',
    'maxitems' => 9999,
    'fieldControl' => [
      'editPopup' => [
          'disabled' => false,
      ],
      'addRecord' => [
          'disabled' => false,
      ],
    ],
  ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users',
    '--div--;User Credits, credits', '', 'after:lastlogin');
