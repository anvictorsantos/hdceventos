<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = 'Antonio';
        $idade = 24;

        $arr = [20, 21, 22];
        $nomes = ['Antonio', 'José', 'Felipe'];

        return view('welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => "Desenvolvedor Full Stack",
                'arr' => $arr,
                'nome' => $nomes   
            ]);
    }

    public function create()
    {
        return view('events.create');
    }
}
