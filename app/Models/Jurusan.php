<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Sximo  {
	
	protected $table = 'tb_jurusan';
	protected $primaryKey = 'jurusan_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_jurusan.* FROM tb_jurusan  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_jurusan.jurusan_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
