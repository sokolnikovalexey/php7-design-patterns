<?

namespace Facade;

class Waiter
{
    public function receiveOrder($order)
    {
        echo(PHP_EOL . 'Waiter: Client wants ' . $order);
    }

    public function transferOrder($order)
    {
        echo(PHP_EOL . 'Waiter: Please cook ' . $order);
    }

    public function returnDish($order)
    {
        echo(PHP_EOL . 'Waiter: Dear client, here is your ' . $order);
    }
}

class Cook
{
    public function cook($order)
    {
        echo(PHP_EOL . 'Cook: Cooking ' . $order . '...');
    }
}

class Restaurant
{
    /** @var Cook*/
    private $cook;

    /** @var Waiter*/
    private $waiter;

    /**
     * Restaurant constructor.
     * @param Cook $cook
     * @param Waiter $waiter
     */
    public function __construct(Cook $cook, Waiter $waiter)
    {
        $this->cook = $cook;
        $this->waiter = $waiter;
    }

    public function processOrder($order)
    {
        //That stuff all under facade
        $this->waiter->receiveOrder($order);
        $this->waiter->transferOrder($order);
        $this->cook->cook($order);
        $this->waiter->returnDish($order);
    }

}