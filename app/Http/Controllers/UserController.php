<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profil()
    {
        return view('profil'); // Correction du chemin de la vue
    }

    public function updateProfil(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max en Ko (2048 Ko = 2 Mo)
        ], [
            'image.max' => 'Imaj la pa dwe depase 2MB.',
            'image.required' => 'Tanpri chwazi yon imaj.',
            'image.image' => 'Fichye a dwe yon imaj.',
            'image.mimes' => 'Fòma imaj la dwe jpeg, png, jpg oswa gif.',
        ]);

        $user = Auth::user();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('profils', $imageName, 'public');

            // Mettre à jour le chemin dans la DB
            $user->profil = 'profils/' . $imageName;
            $user->save();

            return back()->with('success', 'Pwofil mete ajou avèk siksè.');
        }

        return back()->withErrors(['image' => 'Image la pa ka telechaje.']);
    }

    public function updateUser(Request $request)
{
    $user = Auth::user();

    // Valider les infos de base (toujours)
    $request->validate([
        'name' => 'required|string|max:255',
        'tel' => 'nullable|string|max:20',
    ]);

    $user->name = $request->name;
    $user->tel = $request->tel;

    $user->save();

    // Vérifier si l'utilisateur veut changer son mot de passe
    if (($request->change_password_clicked) == 1 || $request->filled('old_password') || $request->filled('new_password') || $request->filled('password_confirmation')) {

        // On regroupe les erreurs dans un tableau
        $errors = [];

        // Vérifier que tous les champs sont remplis
        if (!$request->filled('old_password')) {
            $errors['old_password'] = 'Ou dwe mete aktyèl kod sekre a.';
            return back()->withErrors($errors)->withInput();
        }

        if (!$request->filled('new_password')) {
            $errors['new_password'] = 'Ou dwe mete nouvo kod sekre a.';
            return back()->withErrors($errors)->withInput();
        }

        if (!$request->filled('password_confirmation')) {
            $errors['password_confirmation'] = 'Ou dwe konfime nouvo kod sekre a.';
            return back()->withErrors($errors)->withInput();
        }

        // Vérifier si l'ancien mot de passe est correct
        if ($request->filled('old_password') && !Hash::check($request->old_password, $user->password)) {
            $errors['old_password'] = 'Kod sekre aktyèl la pa kòrèk.';
            return back()->withErrors($errors)->withInput();
        }

        // Vérifier que la confirmation correspond
        if ($request->filled('new_password') && $request->new_password !== $request->password_confirmation) {
            $errors['password_confirmation'] = 'Konfimasyon an pa koresponn ak nouvo kod sekre a.';
            return back()->withErrors($errors)->withInput();
        }

        // Vérifier la longueur minimale du nouveau mot de passe
        if ($request->filled('new_password') && strlen($request->new_password) < 8) {
            $errors['new_password'] = 'Nouvo kod sekre a dwe gen omwen 8 karaktè.';
            return back()->withErrors($errors)->withInput();
        }

        // Si tout est bon : changer le mot de passe
        $user->password = Hash::make($request->new_password);

        $user->save();
    }

    return back()->with('success', 'Modifikasyon yo fèt avèk siksè.');
}


    



}
