<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class rekapmahasiswa extends Sximo  {
	
	protected $table = 'tb_mahasiswa';
	protected $primaryKey = 'mahasiswa_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_mahasiswa.* FROM tb_mahasiswa  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_mahasiswa.mahasiswa_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
