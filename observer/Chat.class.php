<?
namespace Observer;
require_once('ObservableInterface.class.php');

class Chat implements Observable
{
    private $chatData = '';
    private $observersList = [];

    public function addObserver(Observer $observer)
    {
        $this->observersList[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        $observerIndex = array_search($observer, $this->observersList);
        if ($observerIndex !== false)
        {
            unset($this->observersList[$observerIndex]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observersList as $observer)
        {
            $observer->update($this->chatData);
        }
    }

    public function setData($data)
    {
        $this->chatData = $data;
        $this->notifyObservers();
    }
}
