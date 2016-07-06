<?
namespace Adapter;

require_once('NewMobileAPIInterface.class.php');
require_once('OldMobileAPIInterface.class.php');

class MobileAPIAdapter implements OldMobileAPIInterface
{

    /** @var NewMobileAPIInterface*/
    private $apiImplementation;

    /**
     * MobileAPIAdapter constructor.
     * @param NewMobileAPIInterface $api
     */
    public function __construct(NewMobileAPIInterface $api)
    {
        $this->apiImplementation = $api;
    }

    public function getUserById($userId)
    {
        //New API hasn't got this method but we are implement it with adapter
        return $this->apiImplementation->getUser($userId);
    }
}