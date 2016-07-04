<?
namespace Decorator;
require_once('StandartRoom.class.php');
require_once('AirConditionerDecorator.class.php');
require_once('BathroomDecorator.class.php');

header('Content-Type: text/plain');

$room = new StandartRoom();
$room->getDescription();

//Decorate with AirConditioner in runtime!
$room = new AirConditionerDecorator($room);
$room->getDescription();

//Get luxury room with air conditioner and bathroom
$room = new BathroomDecorator($room);
$room->getDescription();
