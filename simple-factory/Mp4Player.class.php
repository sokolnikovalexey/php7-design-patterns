<?
namespace SimpleFactory;
require_once('PlayerInterface.class.php');

class Mp4Player implements Player
{
    public function play()
    {
        echo(PHP_EOL . 'Mp4 playing start');
    }

    public function stop()
    {
        echo(PHP_EOL . 'Mp4 playing stop');
    }
}
