<?php
class Manager
{
    var string $name;

    function sayHello(string $name)
    {
        echo "Hi $name, my name is Manager $this->name";
    }
}

class VicePresident extends Manager
{
    function sayhello(string $name)
    {
        echo "Hi $name, my name is VP $this->name";
    }
}

$manager = new Manager();
$manager->name = "Budi <br>";
$manager->sayHello("joko");

$vp = new VicePresident();
$vp->name = "Ali";
$vp->sayHello("Budiono");