<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/classes/general/xml.php');

$strXmlPath = $_SERVER["DOCUMENT_ROOT"]."/import/";
$strXmlFileName = "test.xml";
$strFullXmlPath = $strXmlPath.$strXmlFileName;
$strIblockTypeID = 15;
$strImportResult = ImportXMLFile($strFullXmlPath, 'news', "s1");
