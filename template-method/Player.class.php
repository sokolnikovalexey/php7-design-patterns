<?
namespace TemplateMethod;

abstract class Player
{
    //This is a template method
    //If some of his parts depends of implementation
    //it should be implemented in child(example prepareDecoder())
    public function play()
    {
        $this->downloadContent();
        $this->prepareDecoder();
        $this->initHandlers();
    }

    protected function initHandlers()
    {
        echo(PHP_EOL . 'handlers are initialized...');
    }

    protected function downloadContent()
    {
        echo(PHP_EOL . 'downloading content...');
    }

    abstract protected function prepareDecoder();
}