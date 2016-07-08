<?
namespace Composite;

require_once('ContentItemInterface.class.php');

class Folder implements ContentItemInterface
{
    /** @var ContentItemInterface[] */
    private $contentItems = [];

    /** @var ContentItem */
    private $contentItemImpl;

    public function __construct($title)
    {
        $this->contentItemImpl = new ContentItem($title);
    }

    /**
     * @param int $shift
     * @return string
     */
    public function getContentTree($shift = 0)
    {
        $folderPath = $this->getTitle($shift);
        foreach ($this->contentItems as $contentItem)
        {
            $folderPath .= $contentItem->getContentTree($shift + 1);
        }
        return $folderPath;
    }

    /**
     * @param int $shift
     * @return string
     */
    public function getTitle($shift = 0)
    {
        return $this->contentItemImpl->getTitle($shift);
    }

    /**
     * @param ContentItemInterface $contentItem
     */
    public function add(ContentItemInterface $contentItem)
    {
        $this->contentItems[] = $contentItem;
    }
}