<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DropdownController extends Controller
{
    public function fetch(Request $request){
		$select = $request->get('select');
		$value = $request->get('value');
		$dependent = $request->get('dependent');
		
		$output = '<option value="">Select'.ucfirst($dependent).'</option>';
		$data = DB::table('course')->where($select, $value)->groupBy($dependent)->get();
			foreach($data as $singledata){
				$output = '<option value="'.$singledata->$dependent.'">'.$singledata->$dependent.'</option>';
			};

		echo $output;

	}
	

}