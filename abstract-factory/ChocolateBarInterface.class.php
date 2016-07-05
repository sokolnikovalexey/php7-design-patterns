<?
namespace AbstractFactory;

interface ChocolateBar
{
    public function __construct(IngredientFactory $factory);
    public function cook();
    public function cut();
    public function box();
}
