<?

namespace Proxy;

interface ContentItemInterface
{
    public function __construct($id);
    public function getContentPath();
    public function getContentLogo();
}