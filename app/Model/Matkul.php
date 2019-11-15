<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';
    protected $guarded = [];

    public function kelas()
    {
    	return $this->hasMany('App\Model\Kelas');
    }
}
