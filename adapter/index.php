<?
namespace Adapter;

require_once('MobileAPIAdapter.class.php');
require_once('NewMobileApi.class.php');

//To get methods from old api we should adopt new api to old api
$oldApi = new MobileAPIAdapter(new NewMobileApi());

//Now methods from old API are available
echo($oldApi->getUserById(1));