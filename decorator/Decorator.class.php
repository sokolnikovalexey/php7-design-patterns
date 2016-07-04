<?
namespace Decorator;
require_once('RoomFeatureInterface.class.php');

abstract class Decorator implements RoomFeature
{
    //to wrap the RoomFeature
    protected $wrapped;

    public function __construct(RoomFeature $feature)
    {
        $this->wrapped = $feature;
    }
}
