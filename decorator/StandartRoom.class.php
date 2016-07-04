<?
namespace Decorator;

class StandartRoom implements RoomFeature
{
    public function getDescription()
    {
        echo(PHP_EOL . 'Standart room');
    }
}
