<?
namespace TemplateMethod;

require_once('AudioPlayer.class.php');
require_once('VideoPlayer.class.php');

header('Content-Type: text/plain');

$audioPlayer = new AudioPlayer();
$audioPlayer->play();

$videoPlayer = new VideoPlayer();
$videoPlayer->play();