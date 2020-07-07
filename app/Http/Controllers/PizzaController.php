<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        // get data from db
        $pizzas = Pizza::all();

        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => request('name')
            ]);
    }

    public function show($id){
        // Use ID to query db for a record
        return view('details', ['id' => $id]);
    }
}
