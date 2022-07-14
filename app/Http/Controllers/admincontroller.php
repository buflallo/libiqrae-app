<?php

namespace App\Http\Controllers;

use App\Models\ecoles;
use App\Models\commande;
use App\Models\message;
use App\Models\Liste;
use App\Models\Niveau;
use App\Models\Pere;
use App\Models\Fils;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use PDF;

use Illuminate\Http\Request;

class admincontroller extends Controller
{

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('admin/commandes');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
    public function connexion()
    {
        if (Auth::check()) {
            return redirect('admin/commandes');
        }
        else
            return view('AdminViews.login');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('admin');
    }


    public function ecoles()
    {
        $ecoles=ecoles::paginate(6);
        return collect($ecoles);
    }
    public function ajoutliste()
    {
        $niveaux= Niveau::all();
        $ecoles= ecoles::all();
        return view('AdminViews.AjouteListe')->with('niveaux',$niveaux)->with('ecoles',$ecoles);
    }
    public function gestionEcole()
    {
        $ecoles= ecoles::all();
        return view('AdminViews.Ecoles')->with('ecoles',$ecoles);
    }
    public function commandes()
    {
        $commandes=commande::all();
        return collect($commandes);
    }
    public function messages()
    {
        $messages=message::paginate(6);
        return collect($messages);
    }
    
    

    public function storelist(Request $request)
    {
        $request->validate([

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            
        ]);

        $input = $request->all();
  
        $listechek= Liste::where('ecole_id',$input['ecole_id'])->where('niveau_id',$input['niveau_id'])->first();

        
        
        if ($image = $request->file('img')) {

                $destinationPath = 'assets/images/liste/';
    
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    
                $image->move($destinationPath, $profileImage);
    
                $input['img'] = "$profileImage";

        }

    
        if ($listechek) {
            $listechek->img="$profileImage";
            $listechek->save();
        }
        else
            Liste::create($input);

        return redirect()->back()
        ->with('success','Liste est crée.');

    }


    public function storeEcole(Request $request)
    {

        
        $request->validate([

            'nom' => 'required',

            'logo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

  

        $input = $request->all();

        $ecolechek= ecoles::where('nom',$input['nom'])->first();

        if ($image = $request->file('logo_img')) {

                $destinationPath = 'assets/images/ecole/';
    
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    
                $image->move($destinationPath, $profileImage);
    
                $input['logo_img'] = "$profileImage";

        }

    
        if ($ecolechek) {
            $ecolechek->logo_img="$profileImage";
            $ecolechek->save();
        }
        else
            ecoles::create($input);

        return redirect()->back()
        ->with('success','Ecole est crée.');
    }


    public function destroyecole($id)
    {
        $ecole = ecoles::find($id);
        $ecole->delete();

        return redirect()->back()
        ->with('ecole est supprimé!');
    }

    public function gestCommandes()
    {
        $commandes = DB::table('commandes')
        ->join('peres','peres.id','=','commandes.pere_id')
        ->join('listes','listes.id','=','commandes.liste_id')
        ->select('peres.id as pere_id','peres.nom as nom','peres.tel as tel','commandes.status','commandes.created_at','peres.adresse as address','peres.info as rem')->groupBy('peres.id','peres.nom','peres.tel','commandes.status','commandes.created_at','peres.adresse','peres.info')
        ->get();
        return view('AdminViews.Commandes')->with('commandes',$commandes);

    }
    
    public function upCommandes($id,$status)
    {
        $commande=commande::where('pere_id',$id);
        $commande->update(['status' => $status]);
        return back();
    }

    public function gestfils($pere_id)
    {
        $listes = DB::table('commandes')->where('pere_id',$pere_id)
        ->join('listes','listes.id','=','commandes.liste_id')
        ->select('listes.img as img','listes.id as id')
        ->get();
        return view('AdminViews.FilsInfos')->with('listes',$listes)->with('pere_id',$pere_id);

    }

    public function updatePere(Request $request)
    {
        $pere = Pere::find($request->pere_id);
        $pere->adresse = $request->adresse;
        $pere->info = $request->info;
        $pere->livraison = $request->ship;
        $pere->save();
    }
    public function updatefils(Request $request)
    {
        $fils = new Fils;
        $fils->pere_id = $request->pere_id;
        $fils->list_id = $request->list_id;
        $fils->genre = $request->sexe;
        $fils->couleur_pref = $request->color;
        $fils->info = $request->rem;
        $fils->save();
        $commandes = DB::table('commandes')
        ->join('peres','peres.id','=','commandes.pere_id')
        ->join('listes','listes.id','=','commandes.liste_id')
        ->select('peres.id as pere_id','peres.nom as nom','peres.tel as tel','commandes.status','peres.adresse as address','peres.info as rem')->groupBy('peres.id','peres.nom','peres.tel','commandes.status','peres.adresse','peres.info')
        ->get();
        return view('AdminViews.Commandes')->with('commandes',$commandes);
    }

    public function printcommande($id)
    {
        


    $images = DB::table('fils')
    ->where('fils.pere_id',$id)
    ->join('peres','peres.id','=','fils.pere_id')
    ->join('listes','listes.id','=','fils.list_id')
    ->select('fils.genre as genre','fils.couleur_pref as color','fils.info as info','listes.img as list')->get();
    $client = Pere::find($id);
    // share data to view
      return view('pdf_view')->with('images',$images)->with('client',$client);
    }
}