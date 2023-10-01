<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuController extends Controller
{
    public function produtos() {
        echo "<h1>Produtos</h1>";
        echo "<ol>";
        echo "<li>Notebook</li>";
        echo "<li>c3el</li>";
        echo "</ol>";

    }
    public function multiplicar($n1,  $n2){
        return $n1* $n2;
    }
}
