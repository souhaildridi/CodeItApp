<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
   // Afficher le profil de l'utilisateur
   public function show()
   {
       $profils = Profil::all();
       return response()->json(['profils' => $profils], 200);
   }


   // Afficher le formulaire de modification du profil


    




   // Mettre à jour le profil de l'utilisateur
   public function store(Request $request)
{
    // Valider les données du formulaire
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'adress' => 'required|string|max:255',
        'horaire' => 'required|date_format:H:i',
        'date' => 'required|date_format:Y-m-d',
        'certif' => 'nullable|string|max:255',
        'user_id' => 'required|exists:users,id', // Vérifie si l'utilisateur avec cet ID existe
        // Ajoutez d'autres champs de profil si nécessaire
    ]);

    try {
        // Créer un nouveau profil avec les données validées
        $profil = Profil::create($validatedData);

        // Retourner une réponse JSON avec un message de succès
        return response()->json(['success' => 'Profil créé avec succès.', 'profil' => $profil], 201);
    } catch (\Exception $e) {
        // En cas d'erreur, retourner une réponse JSON avec un message d'erreur
        return response()->json(['error' => 'Erreur lors de la création du profil.', 'message' => $e->getMessage()], 500);
    }
}


public function update(Request $request)
{
    // Récupérer l'utilisateur authentifié
    $user = Auth::user();

    // Récupérer le profil de l'utilisateur
    $profil = $user->profil;

    // Valider les données du formulaire
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'adress' => 'required|string|max:255',
        'horaire' => 'required|date_format:H:i',
        'date' => 'required|date_format:Y-m-d',
        'certif' => 'nullable|string|max:255',
        'user_id'=>'nullable'
        // Ajoutez d'autres champs de profil si nécessaire
    ]);

    try {
        // Mettre à jour le profil de l'utilisateur avec les données validées
        $profil->update($validatedData);

        // Retourner une réponse JSON avec un message de succès
        return response()->json(['success' => 'Profil mis à jour avec succès.', 'profil' => $profil], 200);
    } catch (\Exception $e) {
        // En cas d'erreur, retourner une réponse JSON avec un message d'erreur
        return response()->json(['error' => 'Erreur lors de la mise à jour du profil.', 'message' => $e->getMessage()], 500);
    }
}

}
