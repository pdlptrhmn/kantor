<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coba extends Model
{
    //

    protected $table = 'coba';
    protected $fillable = ['nama','kelas','kelas','jurusan','jeniskelamin'];
    protected $visible = ['nama','kelas','kelas','jurusan','jeniskelamin'];
    public $timestamps = true;
}
