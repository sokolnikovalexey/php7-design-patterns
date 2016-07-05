<?
namespace AbstractFactory;

require_once('ChocolateBarCreatorInterface.class.php');
require_once('BountyChocolateBar.class.php');
require_once('SnickersChocolateBar.class.php');
require_once('USAIngredientFactory.class.php');

class USAChocolateBarCreator extends ChocolateBarCreator
{
    /**
     * @param string $type
     * @return ChocolateBar
     */
    protected function createBar($type)
    {
        $ingredientFactory = new USAIngredientFactory();
        switch($type)
        {
            case 'bounty':
                return new BountyChocolateBar($ingredientFactory);
            default:
                return new SnickersChocolateBar($ingredientFactory);
        }
    }
}