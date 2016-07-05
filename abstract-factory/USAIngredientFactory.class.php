<?
namespace AbstractFactory;

require_once('IngredientFactory.class.php');

class USAIngredientFactory extends IngredientFactory
{
    public function getNut()
    {
        return 'peanut';
    }
}