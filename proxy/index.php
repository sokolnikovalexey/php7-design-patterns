<?
namespace Proxy;

require_once('ContentItemProxy.class.php');

header('Content-Type: text/plain');

$item = new ContentItemProxy(1);

//This action doesn't require DB connection and can be done on proxy
echo($item->getContentPath() . PHP_EOL);

//This action creates real ContentItem and connects to DB
echo($item->getContentLogo() . PHP_EOL);