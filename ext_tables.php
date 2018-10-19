<?php
defined('TYPO3_MODE') or die();

$boot = function () {
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('usercredits', 'Configuration/TypoScript', 'User Credits Configuration');
};

$boot();
unset($boot);
