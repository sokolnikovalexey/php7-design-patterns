<?
namespace Composite;

require_once('ContentItemInterface.class.php');

class ContentItem implements ContentItemInterface
{
    private $title = '';

    /**
     * ContentItem constructor.
     * @param $title
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * @param int $shift
     * @return string
     */
    public function getContentTree($shift = 0)
    {
        //For content item there is no sub contents
        return $this->getTitle($shift);
    }

    /**
     * @param int $shift
     * @return string
     */
    public function getTitle($shift = 0)
    {
        return str_repeat('--', $shift) . $this->title . PHP_EOL;
    }
}