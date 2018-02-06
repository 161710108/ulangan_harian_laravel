<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mata_pelajaran extends Model
{
    protected $table = 'mata_pelajaran';
	protected $fillable = array('nama_mapel,kkm');

	public function siswa() {
		return $this->belongsToMany('App\Siswa', 'mapel_siswa', 'id_siswa', 'id_mapel');
	}
}
