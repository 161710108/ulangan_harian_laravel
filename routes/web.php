<?php
use App\Siswa;
use App\Wali;
use App\Guru;
use App\Kelas;
use App\Mapel_siswa;
use App\Mata_pelajaran;


Route::get('/', function () {
    return view('welcome');
});



Route::get('soal1', function() {
 		$guru = guru::where('nama', 'like', '%yulianto%')->get();
 		return View::make('soal1', compact('guru'));
	});
Route::get('soal2', function() {
 		$wali = wali::where('nama', 'like', '%Achmad S%')->get();
 		return View::make('soal2', compact('wali'));
	});
 Route::get('soal3', function() {
 		$kelas = Kelas::with('siswa')->get();
 		return View::make('soal3', compact('kelas'));
	});
	Route::get('bonus', function() {

		# Ambil semua data siswa (lengkap dengan semua relasi yang ada)
		$siswa = Siswa::all();

		# Kirim variabel ke View
		return View::make('eloquent', compact('siswa'));
	});
	