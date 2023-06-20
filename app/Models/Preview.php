<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preview extends Model
{
    use HasFactory;

    protected $table = "preview";
    protected $guarded = [];
    public $timestamps = false;

    public function software()
    {
        return $this->belongsTo(Software::class);
    }
}
