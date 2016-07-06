<?
namespace Facade;

require_once('Restaurant.php');

header('Content-Type: text/plain');

//All internal stuff is hidden under Restaurant facade
$restaurant = new Restaurant(new Cook(), new Waiter());
$restaurant->processOrder('Pizza');