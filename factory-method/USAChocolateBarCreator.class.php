<?
namespace FactoryMethod;

require_once('ChocolateBarCreatorInterface.class.php');
require_once('BountyChocolateBar.class.php');
require_once('SnickersChockolateBar.class.php');

class USAChocolateBarCreator extends ChocolateBarCreator
{
    /**
     * @param string $type
     * @return ChocolateBar
     */
    protected function createBar($type)
    {
        switch($type)
        {
            case 'bounty':
                return new BountyChocolateBar();
            default:
                return new SnickersChocolateBar();
        }
    }
}