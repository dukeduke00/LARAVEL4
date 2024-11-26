<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $trenutnoVrijeme = date("h:i:s");
        $sat = date("H");


        $poruka = $sat >= 0 && $sat <= 12
            ? 'Dobro jutro!'
            : 'Dobar dan' ;

        $latestProducts = ProductModel::orderBy('created_at', 'desc')->take(4)->get();


        return view("welcome", compact('trenutnoVrijeme', 'sat', 'poruka', 'latestProducts'));
    }


}
