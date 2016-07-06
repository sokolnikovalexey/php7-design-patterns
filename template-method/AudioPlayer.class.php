<?
namespace TemplateMethod;

require_once('Player.class.php');

class AudioPlayer extends Player
{
    protected function prepareDecoder()
    {
        echo(PHP_EOL . 'prepare audio decoders...');
    }
}