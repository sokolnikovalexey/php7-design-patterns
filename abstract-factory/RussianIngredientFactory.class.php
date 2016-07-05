<?
namespace AbstractFactory;

require_once('IngredientFactory.class.php');

class RussianIngredientFactory extends IngredientFactory
{
    public function getNut()
    {
        return 'hazelnut';
    }
}