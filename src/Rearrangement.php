<?php


class Rearrangement
{
    use SomeTrait;

    public static $publicStaticProperty;

    protected static $protectedStaticProperty;

    private static $privateStaticProperty;

    /**
     * Rearrangement constructor.
     */
    public function __construct()
    {

    }

    public static function publicStaticFunction() {

    }

    protected static function protectedStaticFunction() {

    }

    private static function privateStaticFunction() {

    }

    function __destruct()
    {
    }


    public $publicField;
    private $privateField;
    protected $protectedField;

    protected const PROTECTED_CONST = 2;
    public const PUBLIC_CONST = 1;
    private const PRIVATE_CONST = 3;

    function __call($name, $arguments)
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
