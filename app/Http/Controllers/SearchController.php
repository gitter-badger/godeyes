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
        $starttime=time();
        $input=$request->all();
        $keywords=$input['keywords'];
        $peoples=Peoples::where('username','like','%'.$keywords.'%')
                            ->orWhere('nickname','like','%'.$keywords.'%')
                            ->orWhere('email','like','%'.$keywords.'%')
                            ->simplePaginate(15);
        $endtime=time();
        $subtime=$endtime-$starttime;
        //$subtime=floor(($subtime%(3600*24))%60);
        return view('show')
            ->with('peoples',$peoples)
            ->with('subtime',$subtime)
            ->with('keywords',$keywords);
    }



}
