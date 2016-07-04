<?
namespace Singleton;
require_once('Singleton.class.php');

//Good singleton instance calling
$singleton = Singleton::getInstance();

try
{
    $singleton = new Singleton();
}
catch (\Error $e)
{
    //PHP7 allows you to catch FatalErrors, that is nice ;)
    echo('You are trying to create singleton by the wrong way!');
}
