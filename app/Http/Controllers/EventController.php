<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = 'Layla';
        $idade = 17;

        $nums = [14, 22, 354, 41, 55];

        $nomes = ['Layla', 'Kauã', 'João', 'José'];

        return view('welcome', 
        [
        'nome' => $nome, 
        'idade' => $idade, 
        'profissao' => 'Bancária',
        'arr' => $nums,
        'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }
}
