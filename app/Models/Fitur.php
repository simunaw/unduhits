<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;
    
    protected $table = "fitur";

    public function software()
    {
        return $this->belongsTo(Software::class);
    }
}
