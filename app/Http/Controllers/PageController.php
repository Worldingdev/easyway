<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pages;

class PageController extends Controller
{
    //
    public function home(){
        $page = Pages::first();
        return view('home' ,[
            'page' => $page,
        ]);
    }

    public function pageSet()
    {
        if (Auth::check()) {
            $page = Pages::first();
            return view('pages',['page' => $page,]); // Correction du chemin de la vue
        }
        return to_route('loginPage');
    }

    public function changeFlyer(Request $request ){
        $flyer = $request->input('flyer');
        if (!Pages::exists()) {
            Pages::create([
                'videoLink' => null,
                'text_1' => null,
                'text_2' => null,
                'flyer_1' => null,
                'flyer_2' => null,
                'flyer_3' => null,
                'flyer_4' => null,
                'flyer_5' => null,
                'flyer_6' => null,
                'adress_1' => null,
                'adress_2' => null,
                'tel_usa' => null,
                'tel_ht' => null,
                'email' => null,
            ]);
        }
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max en Ko (2048 Ko = 2 Mo)
            'flyer' => 'required',
        ], [
            'image.max' => 'Imaj la pa dwe depase 2MB.',
            'image.required' => 'Tanpri chwazi yon imaj.',
            'image.image' => 'Fichye a dwe yon imaj.',
            'image.mimes' => 'Fòma imaj la dwe jpeg, png, jpg oswa gif.',
        ]);

        $page = Pages::first();
        if ($request->hasFile('image') && Auth::check() ) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('flyer', $imageName, 'public');

            // Mettre à jour le chemin dans la DB
            $page->$flyer = 'flyer/' . $imageName;
            $page->save();

            return back()->with('success', 'Flyer mete ajou avèk siksè.');
        }

        return back()->withErrors(['image' => 'Image la pa ka telechaje.']);
    }

    public function editContainPage(Request $request)
    {
        $validated = $request->validate([
            'videoLink' => 'required|string|max:255',
            'text_1' => 'required|string|max:255',
            'text_2' => 'required|string|max:255',
            'adress_1' => 'required|string|max:255',
            'adress_2' => 'required|string|max:255',
            'tel_usa' => 'required|string|max:255',
            'tel_ht' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);
        $page = Pages::first();
        $page->update($validated);

        return back()->with('success', 'Modifikasyon yo fèt avèk siksè.');
    }
}
