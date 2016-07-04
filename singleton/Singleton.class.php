<?
namespace Singleton;

class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        //create instance if doesn't exists
        if (is_null(self::$instance))
        {
            self::$instance = new static();
        }
        return self::$instance;
    }

    //Nobody can clone this instance
    final public function __clone()
    {
        throw new BadMethodCallException('__clone method call is forbidden for Singleton');
    }

    //Nobody can unserialize this instance
    final public function __wakeup()
    {
        throw new BadMethodCallException('__wakeup method call is forbidden for Singleton');
    }

    //Nobody outside can call this method
    private function __construct()
    {

    }
}
