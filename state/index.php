<?
namespace State;

require_once('Elevator.class.php');

header('Content-Type: text/plain');

$elevator = new Elevator();

//cal the elevator while it is free
$elevator->call();

//go to 5th and then 3th stage
$elevator->moveToStage(5);
$elevator->moveToStage(3);

//call while busy
$elevator->call();
