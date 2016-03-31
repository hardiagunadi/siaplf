<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class agama extends Sximo  {
	
	protected $table = 'tb_agama';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_agama.* FROM tb_agama  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_agama.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
