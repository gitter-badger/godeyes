<?php
namespace App\Http\Controllers;
use App\Models\Peoples;
use App\Models\Companys;
use App\Models\Qqs;
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
        $type=$input['type'];
        switch ($type) {
        case 'qq':
            $results=Qqs::where('username',$keywords)
                ->simplePaginate(15);
            break;
        case 'people':
            $results=Peoples::where('name',$keywords)
                ->simplePaginate(15);
            break;
        case 'company':
            $results=Companys::where('name',$keywords)
                ->simplePaginate(15);
            break;
        default:
            break;
        }
        $endtime = explode(' ',microtime());
        $thistime = $endtime[0]+$endtime[1]-($starttime[0]+$starttime[1]);
        $thistime = round($thistime,3);
        $subtime=$thistime;
        return view('show')
            ->with('results',$results)
            ->with('type',$type)
            ->with('subtime',$subtime)
            ->with('keywords',$keywords);
    }
}
