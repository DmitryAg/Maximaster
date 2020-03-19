<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/classes/general/xml.php");
/*$response = file_get_contents('http://exercise.develop.maximaster.ru/service/import_xml/');
$fp = fopen('test.xml','w+');
$fw = fwrite($fp,$response);*/
CModule::IncludeModule('iblock');
\Bitrix\Main\Loader::includeModule('catalog');
$APPLICATION->SetTitle("Title");
?>
<?php 
var_dump($_SERVER["DOCUMENT_ROOT"]);
$res = CIBlock::GetList(
   Array(), 
   Array(
      'TYPE'=>'testone', 
      'SITE_ID'=>'s1', 
      'ACTIVE'=>'Y', 
      "CNT_ACTIVE"=>"Y", 
      //"!CODE"=>'my_products'
   ), true
);

 ?>
<form action="#" method = "POST" enctype="multipart/form-data">
	<select name="select" id="select">
		<?php while($ar_res = $res->Fetch()) { ;?>

			<option value="<?=$ar_res['ID']?>"><?=$ar_res['NAME']?></option>
		<?php } ?>
	</select>
	<!--<input type="file" name="filename">-->
	<input type="submit" value="Отправить">
</form>
<?php 



$strXmlPath = $_SERVER["DOCUMENT_ROOT"]."/import/";
$strXmlFileName = "test.xml";
$strFullXmlPath = $strXmlPath.$strXmlFileName;
$strIblockTypeID = 15;
$strImportResult = ImportXMLFile($strFullXmlPath, 15, "s1");


	/*if (isset($_POST['select'])) {
	

	$ABS_FILE_NAME = $_SERVER["DOCUMENT_ROOT"]."/import/test.xml";
	$WORK_DIR_NAME = substr($ABS_FILE_NAME, 0, strrpos($ABS_FILE_NAME, "/")+1);
	//print_r($WORK_DIR_NAME);
                    $obXMLFile = new CIBlockXMLFile;
                    // Удаляем результат предыдущей загрузки
                    $obXMLFile->DropTemporaryTables();
                    // Подготавливаем БД
                    if($obXMLFile->CreateTemporaryTables())
                    {
                        if($fp = fopen($ABS_FILE_NAME, "r+"))
                        {
                        	 $NS = array("STEP"=>0);
                           // Чтение содержимого файла за один шаг
                           $obXMLFile->ReadXMLToDatabase($fp, $NS, 0);
                           fclose($fp);
                            // Индексируем загруженные данные для ускорения доступа
                            if(CIBlockXMLFile::IndexTemporaryTables()){
                                $obCatalog = new CIBlockCMLImport;
                                $xml_root = $obCatalog->GetRoot();
                                debug($xml_root);
                                $table_name = "b_xml_tree";
                                $result = $obCatalog->ImportMetaData($xml_root,"news","s1");
                                 $result = $obCatalog->ImportSections();
                                  $obCatalog->SectionsResort();
                                  $obCatalog = new CIBlockCMLImport;
                             $obCatalog->Init($NS, $WORK_DIR_NAME,false,false,false,false,false,$table_name);
            
                               
                                if($result === true){
                    
                                    $SECTION_MAP = false;
                                    $PRICES_MAP = false;
                                    $obCatalog->ReadCatalogData($SECTION_MAP, $PRICES_MAP);
                                    $result = $obCatalog->ImportElements(time(), 0);
                          
                                }
                            }
                        }
                    }
	}*/
//echo ($_SERVER["DOCUMENT_ROOT"]);
	/*if ($_POST['select']) {
		$strXmlPath = $_SERVER["DOCUMENT_ROOT"]."/import/";
$strXmlFileName = "test.xml";
$strFullXmlPath = $strXmlPath.$strXmlFileName;
$strIblockTypeID = "news";
$strImportResult = ImportXMLFile($strFullXmlPath, "news", "s1");
echo $strImportResult;
	}*/
	

	/*if (isset($_POST['select'])) {
	

	$ABS_FILE_NAME = $_SERVER["DOCUMENT_ROOT"]."/import/test.xml";
	$WORK_DIR_NAME = substr($ABS_FILE_NAME, 0, strrpos($ABS_FILE_NAME, "/")+1);
	//print_r($WORK_DIR_NAME);
                    
                    // Удаляем результат предыдущей загрузки
                    //$obXMLFile->DropTemporaryTables();
                    // Подготавливаем БД
                    
                        $fp = fopen($ABS_FILE_NAME, "r+");
                        //$NS = array("STEP"=>0);
                        $table_name = "b_xml_tree";
                        $obXMLFile = new CIBlockXMLFile;
                        $obXMLFile->DropTemporaryTables();
                        //$obCatalog->Init($NS, $WORK_DIR_NAME,false,false,false,false,false,$table_name);
                       // $obCatalog->DropTemporaryTables();
                        $obXMLFile->CreateTemporaryTables();
                        $NS = array("IBLOCK_ID"=>1,"charset"=>"ru");
                        $obXMLFile->ReadXMLToDatabase($fp, $NS, 0);
                           fclose($fp);
                        CIBlockXMLFile::IndexTemporaryTables();
                        $obCatalog = new CIBlockCMLImport;
                        
                        //$xml_root = $obCatalog->GetRoot();
                       // debug($xml_root);
                        $obCatalog->Init($NS, $WORK_DIR_NAME);
                     	//$xml_root = $obCatalog->GetRoot();
                       	$result = $obCatalog->ImportMetaData(1,"news","s1");
                       	$result = $obCatalog->ImportSections();
                        $obCatalog->SectionsResort();    
                        $obCatalog->Init($NS, $WORK_DIR_NAME);
                       // echo "HUUUU";
            			$SECTION_MAP = false;
    					$PRICES_MAP = false;
                        $obCatalog->ReadCatalogData($SECTION_MAP,$PRICES_MAP);
    					$result = $obCatalog->ImportElements(time(), 0);
    					debug($result);
                    }   */
	//print_r($_POST['select']);
	//print_r($_SERVER['DOCUMENT_ROOT']);
	//echo $_FILES['filename']['tmp_name'];
	//$file = file_get_contents($_FILES['filename']['tmp_name']);
	//print_r($file);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>