<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nim','nama_mhs','ipk','alamat'];
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    public $timestamps = false;
}
