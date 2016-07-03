<?
namespace Strategy;
require_once('ImportStrategyInterface.class.php');

class ExcelImportStrategy implements ImportStrategyInterface
{
    public function import()
    {
        echo('Start importing from Excel...');
    }
}
