<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testtable;

class TestajaxController extends Controller
{
    public function index()
    	{
    		$data = testtable::all();
    		return view("sdetail")->with('data',$data);
    	}

    public function save(Request $request)
    	{
    		$testtable = new testtable;
    		$testtable->name=$request->name;
    		$testtable->phone=$request->phone;
    		$testtable->email=$request->email;

    		$testtable->save();
    	}

    public function delete($id)
    	{
    		testtable::where('sl',$id)->delete();
    	}
    
}
