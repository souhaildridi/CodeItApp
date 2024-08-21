<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Profil;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Afficher la liste des utilisateurs
    public function index()
    {
        $users = User::all();
        return response()->json(['data'=>$users],200);
    }

    // Afficher le formulaire de création d'utilisateur
    public function create()
    {
        return view('users.create');
    }

    // Enregistrer un nouvel utilisateur
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string', // Assurez-vous que ce champ est présent dans le formulaire
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return response()->json(['data' => $request], 201);
        //return redirect()->route('users.index')->with('success', 'Utilisateur ajouté avec succès.');
    }

    // Afficher les détails d'un utilisateur
    public function show()
    
    {  $users = User::findAll();
        return view('users', compact('users'));
    }

    // Afficher le formulaire de modification d'utilisateur
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Mettre à jour un utilisateur existant
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'role' => 'required|string', // Assurez-vous que ce champ est présent dans le formulaire
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    // Supprimer un utilisateur
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès.');
    }

    public function block(int $id)
{
    $user=User::find($id);
    $user->update(['blocked' => true]);

    // Message de succès
    $message = 'Utilisateur bloqué avec succès.';

    // Renvoyer une réponse JSON
    return response()->json(['message' => $user], 200);
}


public function accept(Request $request, $id)
{
    // Recherche du profil
    $profil = Profil::findOrFail($id);

    // Mettre à jour le statut du profil pour l'accepter
    $profil->status = 'accepté';
    $profil->save();

    return redirect()->back()->with('success', 'Profil accepté avec succès.');
}

public function refuse(Request $request, $id)
{
    // Recherche du profil
    $profil = Profil::findOrFail($id);

    // Mettre à jour le statut du profil pour le refuser
    $profil->status = 'refusé';
    $profil->save();

    return redirect()->back()->with('success', 'Profil refusé avec succès.');
}

}
