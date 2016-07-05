<?
namespace Command;

interface CommandInterface
{
    public function execute();
    public function unexecute();
}