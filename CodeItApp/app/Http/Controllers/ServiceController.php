<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\ServiceRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function search(Request $request)
    {
        $location = $request->input('location');

        // Rechercher les services avec la localisation spécifiée
        $services = Service::where('location', 'LIKE', '%'.$location.'%')->get();

        return view('services.index', ['services' => $services]);
    }



    public function accept(Request $request, $id)
    {
        // Recherche de la demande de service
        $serviceRequest = ServiceRequest::findOrFail($id);

        // Logique pour accepter la demande
        $serviceRequest->accepted = true;
        $serviceRequest->save();

        return redirect()->back()->with('success', 'Demande de service acceptée avec succès.');
    }

    // Méthode pour refuser une demande de service
    public function refuse(Request $request, $id)
    {
        // Recherche de la demande de service
        $serviceRequest = ServiceRequest::findOrFail($id);

        // Logique pour refuser la demande
        $serviceRequest->accepted = false;
        $serviceRequest->save();

        return redirect()->back()->with('success', 'Demande de service refusée avec succès.');
    }

public function store(Request $request)
{
    $validatedData = $request->validate([
        'nomS' => 'nullable|string',
        'titre' => 'nullable|string',
        'location' => 'required|string',
        'description' => 'nullable|string',
        'user_id' => 'required|exists:users,id',
    ]);

 
    $service = Service::create($validatedData);

    return response()->json(['service' => $service], 201);
}



    public function show(Service $x)
    {
        $x = Service::all();
        return view('client', compact('x'));
        
    }

   // Méthode pour mettre à jour un service
public function update(Request $request, Service $service)
{
    // Valider les données du formulaire
    $validatedData = $request->validate([
        'nomS' => 'nullable|string',
        'titre' => 'nullable|string',
        'location' => 'nullable|string',
        'description' => 'nullable|string',
        'user_id' => 'nullable|exists:users,id', // Vérifie si l'utilisateur avec cet ID existe
        // Ajoutez d'autres règles de validation si nécessaire
    ]);

    // Mettre à jour le service avec les données validées
    $service->update($validatedData);

    // Retourner une réponse JSON avec le service mis à jour
    return response()->json(['service' => $service], 200);
}


    // Méthode pour supprimer un service spécifique
    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json(['message' => 'Service supprimé avec succès.'], 200);
    }
}
