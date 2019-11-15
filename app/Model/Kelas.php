<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $guarded = [];

    public function siswa()
    {
    	return $this->belongsToMany('App\Model\Siswa');
    }

    public function dosen()
    {
    	return $this->belongsTo('App\Model\Dosen');
    }

    public function matkul()
    {
    	return $this->belongsTo('App\Model\Matkul');
    }
}
