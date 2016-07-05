<?
namespace FactoryMethod;

require_once('RussianChocolateBarCreator.class.php');
require_once('USAChocolateBarCreator.class.php');

header('Content-Type: text/plain');

$russianChocolateFactory = new RussianChocolateBarCreator();
$russianChocolateFactory->getBar('alenka');

$USAChocolateFactory = new USAChocolateBarCreator();
$USAChocolateFactory->getBar('bounty');
$USAChocolateFactory->getBar('snickers');