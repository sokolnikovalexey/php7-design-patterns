<?
namespace FactoryMethod;

require_once('ChocolateBarInterface.class.php');

class BountyChocolateBar implements ChocolateBar
{
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