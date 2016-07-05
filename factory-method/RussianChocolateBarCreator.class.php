<?
namespace FactoryMethod;

require_once('ChocolateBarCreatorInterface.class.php');
require_once('AlenkaChocolateBar.class.php');

class RussianChocolateBarCreator extends ChocolateBarCreator
{
    /**
     * @param string $type
     * @return ChocolateBar
     */
    protected function createBar($type)
    {
        switch ($type)
        {
            default:
                return new AlenkaChocolateBar();
        }
    }
}