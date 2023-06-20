<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersyaratanSistem extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;
    protected $table = "persyaratan_sistem";

    public function software()
    {
        return $this->belongsTo(Software::class);
    }
}
