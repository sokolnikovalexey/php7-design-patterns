<?
namespace Decorator;
require_once('Decorator.class.php');

class AirConditionerDecorator extends Decorator
{
    public function getDescription()
    {
        echo $this->wrapped->getDescription() . ' with air conditioner';
    }
}
