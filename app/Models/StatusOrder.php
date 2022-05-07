<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    use HasFactory;

    const INITIE = 1;
    const EN_SALLE_DE_TIRAGE = 2;
    const EN_FINITION = 3;
    const ATTENTE_POUR_LIVRAISON = 4;
    const LIVRE = 5;

    /***
     * @return array
     */
    public static function getStatusOrder()
    {
        return [
            static::INITIE  => 'En cours de validation',
            static::EN_SALLE_DE_TIRAGE => 'En Salle de tirage',
            static::EN_FINITION => 'En finition',
            static::ATTENTE_POUR_LIVRAISON => 'En attente de Livraison',
            static::LIVRE => 'Livré'
        ];
    }

    /***
     * @return array
     */
    public static function getStatusOrderForMng()
    {
        return [
            static::INITIE  => 'New',
            static::EN_SALLE_DE_TIRAGE => 'En Salle de tirage',
            static::EN_FINITION => 'En finition',
            static::ATTENTE_POUR_LIVRAISON => 'En attente de Livraison',
            static::LIVRE => 'Livré'
        ];
    }
}
