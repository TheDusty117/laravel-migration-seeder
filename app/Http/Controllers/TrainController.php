<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;


class TrainController extends Controller
{

    public function index(){

        $trains = Train::where('orario_partenza','=>', now())->get();

        $data = [
            'trains' => $trains
        ];

        return view('trains.index', $data);

    }
    //
}
