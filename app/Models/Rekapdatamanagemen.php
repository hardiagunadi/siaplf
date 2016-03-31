<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class rekapdatamanagemen extends Sximo  {
	
	protected $table = 'tb_mahasiswa';
	protected $primaryKey = 'mahasiswa_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT `mahasiswa_id`, `jurusan_id`, `nama_mahasiswa`, `tmp_lahir`, `tgl_lahir`, `jenkel`, `agama`, `ukuranjas`, `s_kerja`, `s_nikah`, `alamat`, `no_hp`, `nama_ortu`, `nama_suis`, `pendidikan_terakhir`, `alamat_skolah` FROM `tb_mahasiswa`  ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE jurusan_id= '5'  ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
