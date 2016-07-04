<?
namespace Decorator;
require_once('RoomFeatureInterface.class.php');

class StandartRoom implements RoomFeature
{
    public function getDescription()
    {
        echo(PHP_EOL . 'Standart room');
    }
}
