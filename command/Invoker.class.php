<?
namespace Command;

require_once('CommandInterface.class.php');
require_once('MessageCommand.class.php');
require_once('MessageReceiver.class.php');

class Invoker
{
    /**
     * @var CommandInterface
     */
    private $command;
    private $receiver;

    public function __construct()
    {
        $this->receiver = new MessageReceiver();
        $command = new MessageCommand($this->receiver);
        $command->setMessage('Hello');
        $this->setCommand($command);
    }

    public function execute()
    {
        $this->command->execute();
    }

    public function unexecute()
    {
        $this->command->unexecute();
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->receiver->getMessagesAsString();
    }

    /**
     * @param CommandInterface $command
     */
    private function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }
}