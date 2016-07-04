<?
namespace Decorator;
require_once('Decorator.class.php');

class BathroomDecorator extends Decorator
{
    public function getDescription()
    {
        echo $this->wrapped->getDescription() . ' and bathroom';
    }
}
