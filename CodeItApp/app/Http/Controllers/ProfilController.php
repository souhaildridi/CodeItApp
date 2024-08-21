<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
   // Afficher le profil de l'utilisateur
   public function show()
   {
       $user = Auth::User();
       return view('profiles.show', compact('user'));
   }

   // Afficher le formulaire de modification du profil
   public function edit()
   {
       $user = Auth::User();
       return view('profiles.edit', compact('user'));
   }

   // Mettre à jour le profil de l'utilisateur


}
