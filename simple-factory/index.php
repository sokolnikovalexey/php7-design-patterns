<?
namespace SimpleFactory;
require_once('PlayerFactory.class.php');

header('Content-Type: text/plain');

$factory = new PlayerFactory();

$player = $factory->createPlayer(PlayerFactory::MP3);
$player->play();
$player->stop();

$anotherPlayer = $factory->createPlayer(PlayerFactory::MP4);
$anotherPlayer->play();
$anotherPlayer->stop();
