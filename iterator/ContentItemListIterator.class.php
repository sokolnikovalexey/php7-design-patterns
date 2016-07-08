<?
namespace Iterator;

require_once('ContentItemList.class.php');

class ContentItemListIterator implements \Iterator
{
    private $currentItemId = 0;
    private $contentItemList;

    public function __construct(ContentItemList $contentItemList)
    {
        $this->contentItemList = $contentItemList;
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return ContentItem | null
     * @since 5.0.0
     */
    public function current()
    {
        return $this->contentItemList->getItem($this->currentItemId);
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        $this->currentItemId++;
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        return $this->currentItemId;
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        return !is_null($this->contentItemList->getItem($this->currentItemId));
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        $this->currentItemId = 0;
    }
}