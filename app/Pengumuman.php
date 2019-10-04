<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    //
     protected $table = 'pengumuman';
    //
    protected $fillable = ['id','judul','isi','users_id','kategori_pengumuman_id'];
}