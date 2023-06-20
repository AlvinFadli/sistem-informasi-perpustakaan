<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function buku(){
        return $this->hasMany('\App\Models\Buku');
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function($terbitan) {
            $relationMethods = ['buku'];

            foreach ($relationMethods as $relationMethod) {
                if ($terbitan->$relationMethod()->count() > 0) {
                    return false;
                }
            }
        });
    }
}
