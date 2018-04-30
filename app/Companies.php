<?php
	namespace App;
	use Illuminate\Database\Eloquent\Model;
	/**
	* 
	*/
	class Companies extends Model
	{
		
		protected $table = "companies";
		
		public function projects()
		{
			return $this->belongsTo('App\Projects','company_id');		
		}
	}
