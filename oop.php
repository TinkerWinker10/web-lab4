<?php

class A
{
    public $name;
    public $year;

    public function __construct($name, $year)
    {
        $this->name = $name;
        $this->year = $year;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_year($year)
    {
        $this->year = $year;
    }

    public function get_year()
    {
        return $this->year;
    }

    public function show()
    {
        echo "This is {$this->name} created in {$this->year}<br>";
    }
}

class B extends A
{
    public $extra;
    public function __construct($name, $year, $extra)
    {
        parent::__construct($name, $year);
        $this->extra = $extra;
    }
    
 /*   public function __destruct() {
        echo "Object {$this->name} destructed";
      }*/

     public function set_extra($extra)
    {
        $this->extra = $extra;
    }

    public function get_extra()
    {
        return $this->extra;
    }

    public function show()
    {
        echo "This is {$this->name} created in {$this->year} and extra info {$this->extra}<br>";
    }
}

class C extends A {

}

$obj1 = new A("car", 2008);
$obj2 = new B("bicycle", 2021, "black");
$obj3 = new C("book", 1995);

$obj1->show();
$obj2->show();
$obj3->show();

class Singleton{
    private static $instances = [];
    protected function __construct(){ }
    protected function __clone() { }
    public function __wakeup() 
    {
        throw new \Exception("Error with unserializing a singleton instance");
    }

    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

}

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();
    if ($s1 === $s2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
