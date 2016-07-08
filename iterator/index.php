<?
namespace Iterator;

require_once('ContentItemListIterator.class.php');
require_once('ContentItemList.class.php');
require_once('ContentItem.class.php');

header('Content-Type: text/plain');

$list = new ContentItemList();
$list->addItem(new ContentItem('video.mp4'));
$list->addItem(new ContentItem('audio.mp3'));
$list->addItem(new ContentItem('image.png'));

$iterator = new ContentItemListIterator($list);
while($iterator->valid())
{
    $contentItem = $iterator->current();
    echo(PHP_EOL . $contentItem->getTitle());
    $iterator->next();
}