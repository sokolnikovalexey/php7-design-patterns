<?
namespace SimpleFactory;
require_once('Mp3Player.class.php');
require_once('Mp4Player.class.php');

class PlayerFactory
{
    const MP3 = 'mp3';
    const MP4 = 'mp4';

    public function createPlayer($type)
    {
        $player = null;
        switch($type)
        {
            case self::MP3:
                $player = new Mp3Player();
                break;
            case self::MP4:
                $player = new Mp4Player();
                break;
        }
        return $player;
    }
}
