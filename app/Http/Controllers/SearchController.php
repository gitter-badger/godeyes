<?php

namespace App\Http\Controllers;
use App\Models\Peoples;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(Request $request)
    {
        $input=$request->all();
        $keywords=$input['keywords'];
        $peoples=Peoples::where('username','like','%'.$keywords.'%')
                            ->orWhere('nickname','like','%'.$keywords.'%')
                            ->orWhere('email','like','%'.$keywords.'%')
                            ->get();
       return view('show')->with('peoples',$peoples);
    }



}
