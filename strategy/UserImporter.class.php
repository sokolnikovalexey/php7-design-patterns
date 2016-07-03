<?
namespace Strategy;

class UserImporter
{
	private $importStrategy;

	public function setImportStrategy(ImportStrategyInterface $strategy)
	{
		$this->importStrategy = $strategy;
	}

	public function import()
	{
		echo $this->importStrategy->import();
	}
}
