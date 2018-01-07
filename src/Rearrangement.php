<?php


class Rearrangement
{
    use SomeTrait;
    public const PUBLIC_CONST = 1;

    protected const PROTECTED_CONST = 2;
    private const PRIVATE_CONST = 3;

    public static $publicStaticProperty;

    protected static $protectedStaticProperty;

    private static $privateStaticProperty;

    public $publicField;
    protected $protectedField;
    private $privateField;

    /**
     * Rearrangement constructor.
     */
    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function __call($name, $arguments)
    {
    }

    public static function publicStaticFunction()
    {
    }
    
    protected static function protectedStaticFunction()
    {
    }

    private static function privateStaticFunction()
    {
    }

    public function publicFunction()
    {
    }

    protected function protectedFunction()
    {
    }

    private function privateFunction()
    {
    }
}
