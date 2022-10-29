<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {

        $data = [
            'apelido_nome' => 'Caio',
            'ingredientes' => [
                'farinha',
                'ovos',
                'farinha',
                'forno'
            ],
            

        ];
        return view('welcome', $data);
    }

    public function exercicio2()
    {
        $url = 'https://i.pravatar.cc/150?img=';

        $dados['url'] = $url;
        
        return view('exercicio2', $dados);
    }

}
