<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileInstaller extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "file_installer";
    protected $guarded = [];
    public $timestamps = false;

    public function software()
    {
        return $this->belongsTo(Software::class);
    }
}
