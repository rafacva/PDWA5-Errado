<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\meteo;

class CadastrarController extends Controller
{
    //regra de negócio: validar e persistir dados
    public function salvar (Request $request){

        $request->validate([
            // "cidade" => "required|string",
            "tempMin" => "required|numeric|min:-100|max:100",
            "tempMax" => "required|numeric|min:-100|max:100",
            "precipitacao" => "required|numeric|min:0",
            "umidMax" => "required|numeric|min:0|max:100",
            "umidMin" => "required|numeric|min:0|max:100",
        ]
        ,[
            // "cidade.required" => "O nome da cidade deve ser preenchido",
            // "cidade.string" => "O campo 'Cidade' deve ser válido",
            "tempMin.required" => "O campo 'Temperatura Mínima' deve ser preenchido",
            "tempMin.numeric" => "O campo 'Temperatura Mínima' deve ser válido",
            "tempMin.min" => "O campo 'Temperatura Mínima' deve ser maior do que -100ºC",
            "tempMin.max" => "O campo 'Temperatura Mínima' deve ser menor do que 100ºC",
            "tempMin.required" => "O campo 'Temperatura Máxima' deve ser preenchido",
            "tempMin.numeric" => "O campo 'Temperatura Máxima' deve ser válido",
            "tempMin.min" => "O campo 'Temperatura Máxima' deve ser maior do que -100ºC",
            "tempMin.max" => "O campo 'Temperatura Máxima' deve ser menor do que 100ºC",
            "precipitacao.required" => "O campo 'Precipitação' deve ser preenchido",
            "precipitacao.numeric" => "O campo 'Precipitação' deve ser válido",
            "precipitacao.min" => "A Precipitação não pode ser negativa",

            "umidMax.required" => "O campo 'Umidade Máxima' deve ser preenchido",
            "umidMax.numeric" => "O campo 'Umidade Máxima' deve ser válido",
            "umidMax.min" => "O campo 'Umidade Máxima' deve ser positivo",
            "umidMax.max" => "O campo 'Umidade Máxima' deve ser menor ou igual a 100%",

            "umidMin.required" => "O campo 'Umidade Mínima' deve ser preenchido",
            "umidMin.numeric" => "O campo 'Umidade Mínima' deve ser válido",
            "umidMin.min" => "O campo 'Umidade Mínima' deve ser positivo",
            "umidMin.max" => "O campo 'Umidade Mínima' deve ser menor ou igual a 100%",
        ]    
    
        );

        $meteo = new meteo();
        $meteo->fill($request->all());
        $meteo->save();
        
        // dd($request);

        return view('cadastroSalvo');

    }

}
