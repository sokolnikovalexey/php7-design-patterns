<?
namespace SimpleFactory;
require_once('PlayerInterface.class.php');

class Mp3Player implements Player
{
    public function play()
    {
        echo(PHP_EOL . 'Mp3 playing start');
    }

    public function stop()
    {
        echo(PHP_EOL . 'Mp3 playing stop');
    }
}
