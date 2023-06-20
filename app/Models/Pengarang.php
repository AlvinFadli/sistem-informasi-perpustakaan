<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function buku(){
        return $this->hasMany('\App\Models\Buku');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($karangan) {
            $relationMethods = ['buku'];

            foreach ($relationMethods as $relationMethod) {
                if ($karangan->$relationMethod()->count() > 0) {
                    return false;
                }
            }
        });
    }
}
