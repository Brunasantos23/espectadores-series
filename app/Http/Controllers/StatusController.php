<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Espectador;
use App\Models\ServicoStreming;
use App\Models\Serie;


class StatusController extends Controller
{

   public function teste(){
        dd(Status::find(2)->serie->first()->nome);
    }

    public function teste2(){
       dd(Espectador::find(1)->serie,Espectador::find(1)->servico);

    }

    public function teste3(){
        dd(ServicoStreming::find(1)->espectador,ServicoStreming::find(1)->serie);
    }

    public function teste4(){
        //dd(Serie::find(2)->status,Serie::find(1)->espectador,Serie::find(1)->servico);
        $serie = Serie::find(1);
        $serie->nome = 'tvd';
        dd($serie->nome);


    }
}
