<?
namespace Strategy;
require_once('ImportStrategyInterface.class.php');

class GoogleAccountImportStrategy implements ImportStrategyInterface
{
    public function import()
    {
        return 'Start importing from Google Account' . PHP_EOL;
    }
}
