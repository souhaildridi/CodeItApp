<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvisController extends Controller
{
    public function store(Request $request, $serviceId)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'note' => 'required|integer|min:1|max:5',
            'commentaire' => 'nullable|string',
        ]);

        // Récupérez l'utilisateur connecté
        $user = Auth::user();

        // Créez un nouvel avis pour le service donné
       $review=new Avis();
        $review->user_id = $user->id;
        $review->service_id = $serviceId;
        $review->rating = $validatedData['rating'];
        $review->comment = $validatedData['comment'];
        $review->save();

        // Redirigez l'utilisateur vers une page appropriée (par exemple, la page du service)
        return redirect()->route('services.show', $serviceId)->with('success', 'Avis ajouté avec succès.');
    }
    public function getAllAvis(){
        $reviews=Avis::all();
        return view('home',compact('reviews'));
    }
}
