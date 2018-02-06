<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = array('nama', 'nis', 'id_guru','id_kelas');
 

public function wali() {
		return $this->hasOne('App\Wali', 'id_siswa');
	}

	public function guru() {
		return $this->belongsTo('App\Guru', 'id_guru');
	}

	public function kelas() {
		return $this->belongsTo('App\Kelas', 'id_kelas');
	}
public function mata_pelajaran() {
		return $this->belongsToMany('App\Mata_pelajaran', 'mapel_siswa', 'id_siswa', 'id_mapel');
	}
}

