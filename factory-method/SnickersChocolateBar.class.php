<?
namespace FactoryMethod;

require_once('ChocolateBarInterface.class.php');

class SnickersChocolateBar implements ChocolateBar
{
    public function cook()
    {
        echo(PHP_EOL . 'Cooking snickers chocolate bar');
    }

    public function cut()
    {
        echo(PHP_EOL . 'Cutting  snickers chocolate bar');
    }

    public function box()
    {
        echo(PHP_EOL . 'Boxing snickers chocolate bar');
    }
}