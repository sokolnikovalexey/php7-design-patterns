<?
namespace Command;

require_once('CommandInterface.class.php');
require_once('MessageReceiver.class.php');

class MessageCommand implements CommandInterface
{
    /** @var MessageReceiver*/
    //Receiver is member of the class, who knows how to process command
    private $receiver;

    /*
     * @var string
     */
    private $message = '';

    public function __construct(MessageReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function execute()
    {
        $this->receiver->addMessage($this->message);
    }

    public function unexecute()
    {
        $this->receiver->removeLastMessage();
    }
}