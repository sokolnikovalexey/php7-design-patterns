<?
namespace Observer;
require_once('ObserverInterface.class.php');

class ChatUser implements Observer
{
    private $userName = '';

    public function __construct($name)
    {
        $this->userName = $name;
    }

    public function update($newData)
    {
        echo('User ' . $this->userName . ' received: ' . $newData . PHP_EOL);
    }
}
