<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    function index()
	{
	return view('search');
	}
	
	function search(Request $request)
	{
		if($request->ajax())
			{
				
				$query = $request->get('query');
				if($query !='')
				{
					$data = DB::table('users')
							->where('name','like','%'.$query.'%')
							->get();
					
				}
				else
				{
					$data = DB::table('users')
							->orderBy('name','desc')
							->get();
				}
				$total_row = $data->count();
				if ($total_row >0)
				{
					foreach($data as $row)
					{
						$output.='
						<tr>
							<td>'.$user->id.'</td>
							<td>'.$user->name.'</td>
							<td>'.$user->username.'</td>
							<td>'.$user->email.'</td>
							<td>'.$user->status.'</td>
							</tr>';
					}
				}
				else
				{
					$output.='
					<tr>
					<td align="center" colspan="5">No Data Found</td>
					</tr>
					';
				}
				$data = array(
				'table_data' => $output,
				'total_data' => $total_data);
				
				echo json_encode($data);
			}
	}
	
}
