<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    protected $table = "software";

    // protected $fillable = [
    //     'nama_software',
    //     'nama_perusahaan',
    //     'ringkasan',
    // ];

    protected $guarded = [];
    public $timestamps = false;

    public function fitur()
    {
        return $fitur->hasMany('App\Models\Fitur');
    }

    public function persyaratan_sistem()
    {
        return $persyaratan_sistem->hasMany('App\Models\PersyaratanSistem');
    }

    public function preview()
    {
        return $fitur->hasMany('App\Models\Preview');
    }

    public function ringkasan()
    {
        return $ringkasan->hasMany('App\Models\Ringkasan');
    }

    public function file_panduan()
    {
        return $ringkasan->hasMany('App\Models\FilePanduan');
    }

    public function FileInstaller()
    {
        return $ringkasan->hasMany('App\Models\FileInstaller');
    }
}
