<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    use HasFactory;

    const INITIE = 1;
    const EN_SALLE_DE_TIRAGE = 2;
    const EN_SALLE_DE_DECOUPE = 21;
    const IMPRESSION_DIRECTE = 22;
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
            static::EN_SALLE_DE_DECOUPE => 'En Salle de découpe',
            static::IMPRESSION_DIRECTE => 'Impression directe',
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
            static::EN_SALLE_DE_DECOUPE => 'En Salle de découpe',
            static::IMPRESSION_DIRECTE => 'Impression directe',
            static::EN_FINITION => 'En finition',
            static::ATTENTE_POUR_LIVRAISON => 'En attente de Livraison',
            static::LIVRE => 'Livré'
        ];
    }

    /***
     * @return array
     */
    public static function getStatusOrderLog()
    {
        return [
            static::INITIE  => 'Validation',
            static::EN_SALLE_DE_TIRAGE => 'Salle de tirage',
            static::EN_SALLE_DE_DECOUPE => 'Salle de découpe',
            static::IMPRESSION_DIRECTE => 'Impression directe',
            static::EN_FINITION => 'Finition',
            static::ATTENTE_POUR_LIVRAISON => 'Livré',
            static::LIVRE => 'Livré'
        ];
    }

       /***
     * @param $status
     * @return string
     */
    public static function getValueStatusOrder($status)
    {
        $allStatus = static::getStatusOrder();
        foreach($allStatus as $key => $value) {
            if ($key == $status) {
                return $value;
            }
        }
    }


    /***
     * @return array
     */
    public static function getStatusMatiere()
    {
        return [
            static::EN_SALLE_DE_TIRAGE => 'Salle de Tirage',
            static::EN_SALLE_DE_DECOUPE => 'Salle de Découpe',
            static::IMPRESSION_DIRECTE => 'Impression directe'
        ];
    }
}
