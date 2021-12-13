<?php

namespace App\Http\Controllers;

use App\Models\appareil;
use App\Models\appartement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function addApparelView(){
        return view('addApparel');
    }

    public function createApparel(Request $request)
    {
       
        $appareil = new appareil();
        $appareil->reftype = request()->reftype;
        $appareil->refpiece = 1;
        $appareil->emplacement = request()->emplacement;
        $appareil->descriptionEmplacement = request()->descriptionEmplacement;
        $appareil->description = request()->description;
        $appareil->created_at = now();
        $appareil->updated_at = NULL;
        $appareil->save();     
        
        return view('addApparel');
    }

    public function addAppartView(){
        return view('addAppart');;   
    }

    public function createAppart(Request $request)
    {

        $appartement = new appartement();
        $appartement->reftype = request()->reftype;
        $appartement->refMaison = request()->refMaison;
        $appartement->refSecurite = request()->refSecurite;
        $appartement->nbhabitants = request()->nbhabitants;
        $appartement->created_at = now();
        $appartement->updated_at = now();
        $appartement->save();  
        
        return view('addAppart');
    }

}
