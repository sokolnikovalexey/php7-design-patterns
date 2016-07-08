<?
namespace State;

require_once('ElevatorStateInterface.class.php');
require_once('WaitingElevatorState.class.php');
require_once('MovingElevatorState.class.php');

class Elevator
{
    private $waitingState;
    private $movingState;
    /** @var ElevatorStateInterface */
    private $currentState;

    public function __construct()
    {
        $this->waitingState = new WaitingElevatorState($this);
        $this->movingState = new MovingElevatorState($this);
        $this->currentState = $this->waitingState;
    }

    public function call()
    {
        $this->currentState->onElevatorCalled();
    }

    public function moveToStage($stageId)
    {
        $this->currentState->onStageChanged($stageId);
    }

    public function setState(ElevatorStateInterface $state)
    {
        $this->currentState = $state;
    }
}