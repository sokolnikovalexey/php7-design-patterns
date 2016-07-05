<?
namespace AbstractFactory;

require_once('ChocolateBarInterface.class.php');
require_once('IngredientFactory.class.php');

class SnickersChocolateBar implements ChocolateBar
{
    public function __construct(IngredientFactory $factory)
    {
        echo(PHP_EOL . 'Creating snickers chocolate bar with ' . $factory->getNut());
    }

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