<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilePanduan extends Model
{
    use HasFactory;
    protected $table = "file_panduan";
    protected $guarded = [];
    public $timestamps = false;

    public function software()
    {
        return $this->belongsTo(Software::class);
    }
}
