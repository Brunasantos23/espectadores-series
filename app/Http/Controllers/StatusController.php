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
       $teste = Serie::find(1);
    //    dd($teste);
       return view('teste', compact('teste'));

       //dd(Serie::find(2)->status,Serie::find(1)->espectador,Serie::find(1)->servico);
    }

    public function teste2(){
        $teste = Espectador::find(1);
        return view('teste', compact('teste'));

    }

    public function teste3(){
        $teste = ServicoStreming::find(1)->getSerieAttribute()->first()->created_at;
        return view('teste', compact('teste'));
    }

    public function teste4(){

        $teste = Status::find(1);
        return view('teste', compact('teste'));


    }
}
