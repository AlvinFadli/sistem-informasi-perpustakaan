<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function penerbit(){
        return $this->belongsTo(Penerbit::class);
    }
    public function pengarang(){
        return $this->belongsTo(Pengarang::class);
    }
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
