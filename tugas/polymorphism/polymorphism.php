<?php
class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer{}
class FrontendProgrammer extends Programmer{}

class company
{
    var Programmer $Programmer;
}

$company = new Company();
$company->programmer = new Programmer("Eko");
$company->programmer = new BackendProgrammer("Eko");
$company->programmer = new FrontendProgrammer("Eko");

function sayHello(Programmer $programmer)
{
    echo "Hello $programmer->name";
}

sayHello(new Programmer("Eko"));
sayHello(new BackendProgrammer("Eko"));
sayHello(new FrontendProgrammer("Eko"));
