<?
namespace Adapter;

require_once('NewMobileAPIInterface.class.php');

class NewMobileApi implements NewMobileAPIInterface
{
    public function getUser($userId)
    {
        return 'User';
    }
}