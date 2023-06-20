<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ringkasan extends Model
{
    use HasFactory;
    protected $table = "ringkasan";
    protected $guarded = [];
    public $timestamps = false;

    public function software()
    {
        return $this->belongsTo(Software::class);
    }
}
