<?
namespace State;

require_once('ElevatorStateInterface.class.php');
require_once('Elevator.class.php');

class MovingElevatorState implements ElevatorStateInterface
{
    /** @var  Elevator */
    private $elevator;

    public function onStageChanged($newStageId)
    {
        echo('Moving to the ' . $newStageId . ' stage' . PHP_EOL);
        echo('Moving success. Elevator is on the ' . $newStageId . ' stage' . PHP_EOL);
        $this->elevator->setState(new WaitingElevatorState($this->elevator));
    }

    public function onElevatorCalled()
    {
        echo('Please Wait. Elevator is busy.' . PHP_EOL);
    }

    public function __construct(Elevator $elevator)
    {
        $this->elevator = $elevator;
    }
}