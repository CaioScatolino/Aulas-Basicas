<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio1Controller extends Controller
{
    public function pessoas()
    {
        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2
            ]
        ];

        $dados['pessoas'] = $pessoas;

        return view('pessoas', $dados);
    }
}
