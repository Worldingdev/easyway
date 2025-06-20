<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colis;
use App\Models\User;
use Carbon\Carbon;


class ColisController extends Controller
{
    public function liste(){
        $allcolis = Colis::All();
        $total = $allcolis->count();
        $livres = $allcolis->where('state', 'Livre')->count();
        $nonLivres = $total - $livres;
        // Calcul des pourcentages
        $pourcentageLivres = $total > 0 ? round(($livres / $total) * 100) : 0;
        $pourcentageNonLivres = $total > 0 ? round(($nonLivres / $total) * 100) : 0;
        $today = Carbon::today();
        // Colis ajoutés aujourd'hui
        $colisToday = Colis::whereDate('D_Deposite', $today)->count();
        // Pourcentage
        $pourcentageToday = $total > 0 ? round(($colisToday / $total) * 100) : 0;

        $totalFraisLivres = Colis::where('state', 'Livre')->sum('fee');





        return view('dashboard' ,[
            'allcolis' => $allcolis,
            'pourcentageLivres' => $pourcentageLivres,
            'pourcentageNonLivres' => $pourcentageNonLivres,
            'pourcentageToday' => $pourcentageToday,
            'totalFraisLivres' => $totalFraisLivres,
        ]);

    }

    public function save(Request $request){
        $validated = $request->validate([
            'trackingNumber' => ['required','string'],
            'senderName' =>  ['required','string'],
            'receiverName' => ['required','string'],
            'weight' => ['required','numeric'],
            'fee_lb' => ['required','numeric'],
            'tax' => ['nullable','numeric'],
            'state' => ['required','string'],
            'D_Deposite' => ['required','date'],
            'D_Delivery' => ['nullable','date'],
        ]);
        
        $colischeck = Colis::where('trackingNumber', $validated['trackingNumber'])->first();

        if($colischeck){
            return back()->with('error', 'Ere !!! nimoro Koli sa ekziste deja ');
        }

        Colis::create([
               'trackingNumber' => $validated['trackingNumber'],
               'senderName' => $validated['senderName'],
               'receiverName' => $validated['receiverName'], 
               'weight' => $validated['weight'],
               'tax' => $validated['tax'],
               'fee' => ($validated['fee_lb'] * $validated['weight']) + $validated['tax'],
               'state' => $validated['state'], 
               'D_Deposite' => $validated['D_Deposite'], 
               'D_Delivery' => $validated['D_Delivery'],  
            ]);
            return redirect('/dashboard')->with('success', 'Anrejistreman reyisi');
    }

    public  function update(Request $request) {
        // Validation des données
        $validated = $request->validate([
            'trackingNumber' => ['required', 'string'],
            'senderName' =>  ['required', 'string'],
            'receiverName' => ['required', 'string'],
            'weight' => ['required', 'numeric'],
            'fee_lb' => ['required','numeric'],
            'tax' => ['nullable','numeric'],
            'state' => ['required', 'string'],
            'D_Deposite' => ['required', 'date'],
            'D_Delivery' => ['nullable', 'date'],
        ]);

    
        // Recherche du colis par trackingNumber
        $colis = Colis::where('trackingNumber', $validated['trackingNumber'])->first();
    
        if ($colis) {
            // Mise à jour des informations
            $colis->update([
                'senderName' => $validated['senderName'],
               'receiverName' => $validated['receiverName'], 
               'weight' => $validated['weight'],
               'tax' => $validated['tax'],
               'fee' => ($validated['fee_lb'] * $validated['weight']) + $validated['tax'],
               'state' => $validated['state'], 
               'D_Deposite' => $validated['D_Deposite'], 
               'D_Delivery' => $validated['D_Delivery'],      
            ]);
            return redirect('/dashboard')->with('success', 'Modifikasyon reyisi');
        } else {
            return back()->with('error', 'Koli sa pa anrejistre ! verifye nimero koli a');
        }
    }

    public function delete(Request $request){
        $validated = $request->validate([
            'trackingNumber' => ['required', 'string'],
        ]);
        $colis = Colis::where('trackingNumber', $validated['trackingNumber'])->first();
        if($colis){
        $colis->delete();
        return redirect('/dashboard')->with('success', 'Sipresyon reyisi');
        } else {
            return back()->with('error', 'Ere');
        }
    }

    public function check(Request $request) {
        // Validation du tracking number
        $validated = $request->validate([
            'idColis' => ['required', 'string'],
            'typeCheck' => ['required', 'string'],
        ]);
    
        // Rechercher le colis dans la base de données
        $colischeck = Colis::where('trackingNumber', $validated['idColis'])->first();
        $admin = User::where('type',"admin")->first();
    
        // Vérifier si le colis existe
        if (!$colischeck) {
            return redirect()->back()->with('error', 'Koli sa pa anrejistre ! tanpri verifye nimero koli a osinon ')->with('admin', $admin);
        }
    
        // Retourner la vue avec le colis et un message de succès
        if($validated['typeCheck'] == 'check'){
            return redirect()->back()->with('success', 'Enfomasyon jeneral')->with('colis', $colischeck);
        }else{
            return redirect()->back()->with('colischeck', $colischeck);
        }
        

        
    }
    
}
