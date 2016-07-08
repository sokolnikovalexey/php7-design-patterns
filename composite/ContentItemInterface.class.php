<?
namespace Composite;

interface ContentItemInterface
{
    public function __construct($title);
    public function getContentTree($shift = 0);
    public function getTitle($shift = 0);
}