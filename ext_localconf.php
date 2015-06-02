<?php
$composerAutoloadFile = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY)
	. 'Resources/Private/PHP/vendor/autoload.php';

require_once($composerAutoloadFile);
