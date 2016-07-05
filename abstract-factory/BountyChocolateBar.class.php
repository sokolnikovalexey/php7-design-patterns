<?
namespace AbstractFactory;

require_once('ChocolateBarInterface.class.php');
require_once('IngredientFactory.class.php');

class BountyChocolateBar implements ChocolateBar
{
    public function __construct(IngredientFactory $factory)
    {
        echo(PHP_EOL . 'Creating bounty chocolate bar with ' . $factory->getNut());
    }

    public function cook()
    {
        echo(PHP_EOL . 'Cooking bounty chocolate bar');
    }

    public function cut()
    {
        echo(PHP_EOL . 'Cutting  bounty chocolate bar');
    }

    public function box()
    {
        echo(PHP_EOL . 'Boxing bounty chocolate bar');
    }
}