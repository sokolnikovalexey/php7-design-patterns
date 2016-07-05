<?
namespace FactoryMethod;

require_once('ChocolateBarInterface.class.php');

class AlenkaChocolateBar implements ChocolateBar
{
    public function cook()
    {
        echo(PHP_EOL . 'Cooking Alenka chocolate bar');
    }

    public function cut()
    {
        echo(PHP_EOL . 'Cutting  Alenka chocolate bar');
    }

    public function box()
    {
        echo(PHP_EOL . 'Boxing Alenka chocolate bar');
    }
}