<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class rekappersyaratan extends Sximo  {
	
	protected $table = 'tb_persyaratan';
	protected $primaryKey = 'persyaratan_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_persyaratan.* FROM tb_persyaratan  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_persyaratan.persyaratan_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
