<?
namespace AbstractFactory;

abstract class ChocolateBarCreator
{
    /**
     * @param $type
     * @return ChocolateBar
     */
    public final function getBar($type)
    {
        $bar = $this->createBar($type);
        $bar->cook();
        $bar->cut();
        $bar->box();
        return $bar;
    }

    /**
     * @param $type
     * @return ChocolateBar
     */
    protected abstract function createBar($type);
}