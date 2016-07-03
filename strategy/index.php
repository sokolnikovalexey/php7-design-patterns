<?
namespace Strategy;
require_once('UserImporter.class.php');
require_once('ExcelImportStrategy.class.php');
require_once('GoogleAccountImportStrategy.class.php');

$importer = new UserImporter();
//use strategy #1
$importer->setImportStrategy(new ExcelImportStrategy());
$importer->import();

//change import strategy
$importer->setImportStrategy(new GoogleAccountImportStrategy());
$importer->import();
