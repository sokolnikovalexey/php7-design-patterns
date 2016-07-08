<?

namespace Proxy;

require_once('ContentItemInterface.class.php');

class ContentItem implements ContentItemInterface
{
    private $contentItemId;

    public function __construct($id)
    {
        //Creating of this element is too long
        //For example, it need database connection
        echo('Create ContentItem' . PHP_EOL);
        sleep(1);
        $this->contentItemId = $id;
    }

    public function getContentPath()
    {
        return 'http://example.com/content?id=' . $this->contentItemId;
    }

    public function getContentLogo()
    {
        //In real life this logo url stored in the database and we need time to connect to it
        return 'logo.png';
    }
}