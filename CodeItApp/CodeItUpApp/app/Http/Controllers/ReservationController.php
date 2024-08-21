<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function reserveService($serviceId)
{
    // Récupérez l'utilisateur connecté
    $user = Auth::user();

    // Récupérez le service
    $service = Service::findOrFail($serviceId);

    // Créez une réservation pour ce service
    $reservation = new Reservation();
    $reservation->user_id = $user->id;
    $reservation->service_id = $service->id;
    $reservation->save();

    // Redirigez l'utilisateur vers une page appropriée (par exemple, une page de confirmation)
    return redirect()->route('services.show', $service->id)->with('success', 'Service réservé avec succès.');
}
}
