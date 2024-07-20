<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meteo;


class XmlController extends Controller
{
    //regra de negócio: pegar todos os dados e gerar um XML
    public function gerarXml(){
        //buscar os registros do banco
        $dados = Meteo::all(); // qeuivale a: select * from tabela
        //print_r($dados);

        //retornar a view com os dados
        return response()->view('data-xml', ['registros'=> $dados])->header('Content-Type', 'application/xml');
    }
}