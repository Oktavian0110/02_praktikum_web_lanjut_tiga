<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function marbel(){
        return "Marbel - Educational Games";
    }

    public function marbel2(){
        return "Marbel & Friends - Kid Games";
    }

    public function riri(){
        return "Riri - Story Books";
    }
    public function kolak(){
        return "Kolak - Kids Song";
    }

    public function kabi(){
        return "Kabi - Islamic Apps";
    }

    public function marbel3(){
        return "Marbel Junior";
    }

    public function keong(){
        return "Keong Games";
    }
}
