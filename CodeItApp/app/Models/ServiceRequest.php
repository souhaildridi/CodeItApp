<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;
     /**
     * Les attributs pouvant être remplis massivement.
     *
     * @var array
     */
    protected $fillable = [
        'accepted',
        // Autres attributs de votre modèle ici...
    ];

    /**
     * Les attributs à masquer lors de la conversion en tableau ou JSON.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'secret_attribute',
    ];

    /**
     * Les attributs à convertir en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'accepted' => 'boolean',
        // Autres conversions de type ici...
    ];

    /**
     * Définition des relations du modèle, par exemple :
     *
     * public function user()
     * {
     *     return $this->belongsTo(User::class);
     * }
     */

}
