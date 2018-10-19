<?php
defined('TYPO3_MODE') or die();

$boot = function () {
  \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
      'ErikKonrad.usercredits',
      'Balance',
      [
          'Balance' => 'list',
      ],
      [
          'Balance' => '',
      ]
  );
};

$boot();
unset($boot);
