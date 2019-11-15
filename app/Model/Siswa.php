<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $guarded = [];


    public function kelas()
    {
    	return $this->belongsToMany('App\Model\Kelas');
    }
}
