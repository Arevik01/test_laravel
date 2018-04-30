<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Companies;

class CompaniesController extends BaseController
{
	public function index()
	{
		
		$data = Companies::select('companies.title as company_title')
			// ->join('projects','companies.id','=','projects.company_id')
			// ->join('tasks','tasks.project_id','=','projects.id')
			->with('projects')
			->get();

			dd($data);
	}
}