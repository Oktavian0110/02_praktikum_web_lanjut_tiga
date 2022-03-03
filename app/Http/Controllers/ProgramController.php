<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program(){
        return "karir";
    }
    public function magang(){
        return "magang";
    }
    public function industri(){
        return "industri";
    }
}
