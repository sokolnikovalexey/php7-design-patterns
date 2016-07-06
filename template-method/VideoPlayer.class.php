<?

namespace TemplateMethod;

require_once('Player.class.php')
;
class VideoPlayer extends Player
{
    protected function prepareDecoder()
    {
        echo(PHP_EOL . 'prepare video decoders...');
    }
}