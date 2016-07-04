<?
namespace Observer;
require_once('Chat.class.php');
require_once('ChatUser.class.php');

header('Content-Type: text/plain');

$chat = new Chat();
$userA = new ChatUser('Alex');
$userB = new ChatUser('Bob');

//Add users to chat
$chat->addObserver($userA);
$chat->addObserver($userB);

//Update chat state (Both users will receive the message)
$chat->setData('Test message');

//Remove Bob from listeners. Bob will bot receive new message
$chat->removeObserver($userB);
$chat->setData('New message');
