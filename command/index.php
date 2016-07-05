<?
namespace Command;

require_once('Invoker.class.php');

header('Content-Type: text/plain');

//All stuff encapsulated in Invoker
$invoker = new Invoker();

echo(PHP_EOL . 'Execute command 10 times:' . PHP_EOL);
for ($i = 0; $i < 10; ++$i)
{
    $invoker->execute();
}
echo($invoker->getResult());

echo(PHP_EOL . 'After unexecute 9 times:' . PHP_EOL);
for ($i = 0; $i < 9; ++$i)
{
    $invoker->unexecute();
}
echo($invoker->getResult());