<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ecoles;
use App\Models\Liste;
use App\Models\Pere;
use App\Models\commande;
use App\Models\message;
use App\Http\Resources\listeResources;
use Illuminate\Support\Facades\DB;




class clientcontroller extends Controller
{
    public function ecoles(Request $request)
    {
        $ecoles = ecoles::paginate(8);
        return view('ClientViews.Ecoles',compact('ecoles'));
    }

    public function listecoles(Request $request)
    {
        $ecoles = ecoles::all();
        return view('ClientViews.Acceuil',compact('ecoles'));
    }

    
    public function changeLanguage(Request $request)
    {
        $validated = $request->validate([
            'language' => 'required',
        ]);

        \Session::put('language', $request->language);

        return redirect()->back();
    }

    public function listes($id,Request $request)
    {
        if ($request->search) {
            
            $ecole = ecoles::where('id','=',$id)->get();
            $listes = DB::table('listes')->where('classe','LIKE','%'.$request->search.'%')->where('ecole_id','=',$id)
            ->join('niveaux','listes.niveau_id','=','niveaux.id')
            ->select('listes.id','listes.img','niveaux.classe')->paginate(8);
            return view('ClientViews.Ecole-List',compact('ecole','listes'));
        }
        $ecole = ecoles::where('id','=',$id)->get();
        $listes = DB::table('listes')->where('ecole_id','=',$id)
        ->join('niveaux','listes.niveau_id','=','niveaux.id')
        ->select('listes.id','listes.img','niveaux.classe')->paginate(8);
        return view('ClientViews.Ecole-List',compact('ecole','listes'));
    }
    public function commander($id,$ecole_id)
    {
        $liste = Liste::where('id',$id)->where('ecole_id',$ecole_id)->get();
        return view('ClientViews.Coordonnes')->with('liste',$liste);
    }

    public function searching(Request $request)
    {
        if ($request->search) {
            
            $ecoles = ecoles::search($request->search)->paginate(4);
            if(!$ecoles->count())
            {
                return 'erreur';
            }
        }
        else
        {
            $ecoles = ecoles::paginate(8);
            return view('ClientViews.search',compact('ecoles'));
        }
        return view('ClientViews.search',compact('ecoles'));
    }

    public function searchingpost(Request $request)
    {
        if ($request->search) {
            
            $ecoles = ecoles::search($request->search)->paginate(4);
            if(!$ecoles->count())
            {
                return 'erreur';
            }
        }
        else
        {
            $ecoles = ecoles::paginate(8);
            return view('ClientViews.Ecoles',compact('ecoles'));
        }
        return view('ClientViews.Ecoles',compact('ecoles'));
    }
    public function commandeStore($id,Request $request)
    {
        $request->validate([

            'nom' => 'required',

            'tel' => 'required',

            'adresse' => 'required'
        ]);

        $input = $request->all();

        $check = Pere::where('tel','LIKE','%'.$request->tel.'%')->first();
        
        $commande = new commande();
        
        if ($check) {
	    $commande_commande1 = Commande::where('pere_id','=',$check->id)->where('liste_id','=',$id)->exists();
            if($commande_commande1)
            	return view('ClientViews.Contact')->with('errors','error');
            else
                $commande->pere_id = $check->id;
        }
        else{
            $nv_pere = Pere::create($input);
            $commande->pere_id = $nv_pere->id;
        }
        $commande->liste_id = $id;
        $commande->status = 'en cours';
        $commande->save();
        return view('ClientViews.merci');
        
    }
    
    public function contacter(Request $request)
    {
        $request->validate([

            'nom' => 'required',

            'tel' => 'required',
            
            'message' => 'required',

        ]);
        $message = new message;
        $check = Pere::where('tel','LIKE','%'.$request->tel.'%')->first();
        if ($check) {
            $message->message = $request->message;
            $check->nom = $request->nom;
            $check->tel = $request->tel;
            if($request->email)
            $check->email = $request->email;
            $check->save();
            $message->pere_id = $check->id;
        }
        else
        {
            $pere = new Pere;
            $pere->nom = $request->nom;
            $pere->tel = $request->tel;
            if($request->email)
            $pere->email = $request->email;
            $pere->save();
            $message->pere_id = $pere->id;
        }
        $message->save();
        return back();
    }
    
    public function setCookie(Request $request)
    {
        return response('success')->cookie('accept-cookie', true, config('constants.COOKIE_ACCEPT_LIFETIME'));
    }

}
