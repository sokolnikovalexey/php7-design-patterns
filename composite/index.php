<?
namespace Composite;

require_once('Folder.class.php');
require_once('ContentItem.class.php');

header('Content-Type: text/plain');

$innerFolder = new Folder('Inner Folder');
$innerFolder->add(new ContentItem('video.mp4'));
$innerFolder->add(new ContentItem('audio.mp3'));

$outerFolder = new Folder('Outer Folder');
$outerFolder->add($innerFolder);
echo($outerFolder->getContentTree());
