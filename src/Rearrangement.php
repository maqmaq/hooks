<?php


class Rearrangement
{
    use SomeTrait;
    public const PUBLIC_CONST = 1;

    protected const PROTECTED_CONST = 2;
    private const PRIVATE_CONST = 3;

    public static $publicStaticProperty;

    public $publicField;

    protected static $protectedStaticProperty;
    protected $protectedField;

    private static $privateStaticProperty;
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

    public function publicFunction()
    {
    }

    protected static function protectedStaticFunction()
    {
    }

    protected function protectedFunction()
    {
    }

    private static function privateStaticFunction()
    {
    }

    private function privateFunction()
    {
    }
}
