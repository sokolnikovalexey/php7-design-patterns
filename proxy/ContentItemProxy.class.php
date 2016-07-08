<?

namespace Proxy;

require_once('ContentItem.class.php');
require_once('ContentItemInterface.class.php');

class ContentItemProxy implements ContentItemInterface
{
    private $contentItemId;
    private $contentItemImpl = null;

    public function __construct($id)
    {
        echo('Create ContentItemProxy' . PHP_EOL);
        $this->contentItemId = $id;
    }

    //Simple operation, that has no reason to connect to DB
    public function getContentPath()
    {
        return 'http://example.com/content?id=' . $this->contentItemId;
    }

    //This operation required DB connection and can not be done in proxy instance
    public function getContentLogo()
    {
        if (is_null($this->contentItemImpl))
        {
            $this->contentItemImpl = new ContentItem($this->contentItemId);
        }
        return $this->contentItemImpl->getContentLogo();
    }
}