<?
namespace AbstractFactory;

require_once('ChocolateBarCreatorInterface.class.php');
require_once('AlenkaChocolateBar.class.php');
require_once('RussianIngredientFactory.class.php');

class RussianChocolateBarCreator extends ChocolateBarCreator
{
    /**
     * @param string $type
     * @return ChocolateBar
     */
    protected function createBar($type)
    {
        $ingredientFactory = new RussianIngredientFactory();
        switch ($type)
        {
            default:
                return new AlenkaChocolateBar($ingredientFactory);
        }
    }
}