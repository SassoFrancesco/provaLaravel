<?php

namespace App\Http\Controllers;

use App\Dati;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UIController extends Controller
{
    public function index() {
        return view("index");
    }

}

