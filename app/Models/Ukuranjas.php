<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ukuranjas extends Sximo  {
	
	protected $table = 'tb_ukuranjas';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_ukuranjas.* FROM tb_ukuranjas  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_ukuranjas.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
