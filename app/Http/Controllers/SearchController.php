<?php

namespace App\Http\Controllers;
use App\Models\Peoples;
use App\Models\Sgk;
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
        $starttime = explode(' ',microtime());
        $input=$request->all();
        $keywords=$input['keywords'];
        $peoples=Peoples::where('username',$keywords)
            ->orWhere('nickname',$keywords)
            ->orWhere('email',$keywords)
            ->simplePaginate(15);
        $endtime = explode(' ',microtime());
        $thistime = $endtime[0]+$endtime[1]-($starttime[0]+$starttime[1]);
        $thistime = round($thistime,3);
        $subtime=$thistime;
        return view('show')
            ->with('peoples',$peoples)
            ->with('subtime',$subtime)
            ->with('keywords',$keywords);
    }



}
