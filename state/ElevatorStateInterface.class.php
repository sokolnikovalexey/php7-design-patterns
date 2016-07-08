<?
namespace State;

require_once('Elevator.class.php');

interface ElevatorStateInterface
{
    public function __construct(Elevator $elevator);
    public function onStageChanged($newStageId);
    public function onElevatorCalled();
}