<?php

namespace App\Http\Controllers;

use App\Dati;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AnagraficaController extends Controller
{
    public function index(Request $request) {
        $cognome = $request->input("cognome");
        $cap = $request->input("cap");

        $query = Dati::query();

        if(!empty($cognome)) {
            $query->where("cognome", $cognome);
        }

        if(!empty($cap)) {
            $query->where("cap", $cap);
        }

        return $query->get();
    }

    public function create(){


        return view("insert");

    }

    public function store(Request $request){

        $cognome = $request->input("cognome");
        $nome=$request->input("nome");
        $citta = $request->input("citta");
        $indirizzo = $request->input("indirizzo");
        $cap = $request->input("cap");
        $email = $request->input("email");
        $cellulare= $request->input("cellulare");

        $dati = new Dati();

        $dati->cognome = $cognome;
        $dati->nome = $nome;
        $dati->citta = $citta;
        $dati->indirizzo = $indirizzo;
        $dati->cap = $cap;
        $dati->email = $email;
        $dati->cellulare = $cellulare;

        $dati->save();

        return [
            "success" => true,
            "data" => $dati
        ];
    }
}

