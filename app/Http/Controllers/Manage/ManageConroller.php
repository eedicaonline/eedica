<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ManageConroller extends Controller
{

	public function index ()
	{
		return redirect()->route('manage.dashboard');
	}

	public function dashborad ()
	{
		return view('manage.dashboard');
	}

}
