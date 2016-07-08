<?
namespace Iterator;

require_once('ContentItem.class.php');

class ContentItemList
{
    /** @var ContentItem[] */
    private $contentItems = [];

    /**
     * @param ContentItem $contentItem
     */
    public function addItem(ContentItem $contentItem)
    {
        $this->contentItems[] = $contentItem;
    }

    /**
     * @param $itemId
     * @return ContentItem|null
     */
    public function getItem($itemId)
    {
        return array_key_exists($itemId, $this->contentItems) ? $this->contentItems[$itemId] : null;
    }
}