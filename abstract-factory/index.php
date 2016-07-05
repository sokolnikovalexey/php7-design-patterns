<?
namespace AbstractFactory;

require_once('RussianChocolateBarCreator.class.php');
require_once('USAChocolateBarCreator.class.php');

header('Content-Type: text/plain');

// All difference between factory-method and abstract factory
// is inside RussianChocolateBarCreator and USAChocolateBarCreator
$russianChocolateFactory = new RussianChocolateBarCreator();
$russianChocolateFactory->getBar('alenka');

$USAChocolateFactory = new USAChocolateBarCreator();
$USAChocolateFactory->getBar('bounty');
$USAChocolateFactory->getBar('snickers');