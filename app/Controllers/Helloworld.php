<?php 

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index()
    {
        echo "<h1>Hellow World!</h1>";
    }

    public function hellopersonalizado($nome)
    {
        echo "<h1>Hello, $nome !</h1>"; 
    }

    public function cont($x, $y) //public/Helloworld/cont/x/y
    {
        $total = $x + $y;
        echo "A soma de $x + $y = $total"; 
    }
}


?>