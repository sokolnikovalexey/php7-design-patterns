<?
namespace AbstractFactory;

require_once('ChocolateBarInterface.class.php');
require_once('IngredientFactory.class.php');


class AlenkaChocolateBar implements ChocolateBar
{
    public function __construct(IngredientFactory $factory)
    {
        echo(PHP_EOL . 'Creating Alenka chocolate bar with ' . $factory->getNut());
    }

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