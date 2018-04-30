<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Companies;

class CompaniesController extends BaseController
{
	public function index()
	{
		dd('7777777777777777');
		$data = Companies::select('companies.title as company_title', 'projects.title as project_title')
			->join('projects','companies.id','=','projects.company_id')
			->join('tasks','tasks.project_id','=','projects.id')
			->get();

	}
}