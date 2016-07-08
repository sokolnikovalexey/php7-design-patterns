<?
namespace State;

require_once('ElevatorStateInterface.class.php');
require_once('Elevator.class.php');

class WaitingElevatorState implements ElevatorStateInterface
{
    /** @var  Elevator */
    private $elevator;

    public function onStageChanged($newStageId)
    {
        echo('What are you doing in a waiting elevator? Start move to the ' . $newStageId . ' stage' . PHP_EOL);
        $this->elevator->setState(new MovingElevatorState($this->elevator));
    }

    public function onElevatorCalled()
    {
        echo('Elevator called. Start moving.' . PHP_EOL);
        $this->elevator->setState(new MovingElevatorState($this->elevator));
    }

    public function __construct(Elevator $elevator)
    {
        $this->elevator = $elevator;
    }
}