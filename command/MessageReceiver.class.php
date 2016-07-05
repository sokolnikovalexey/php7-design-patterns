<?
namespace Command;

class MessageReceiver
{
    private $messages = [];

    public function addMessage($msg)
    {
        $this->messages[] = $msg;
    }

    public function removeLastMessage()
    {
        array_pop($this->messages);
    }

    public function getMessagesAsString()
    {
        return implode(',' . PHP_EOL, $this->messages);
    }
}