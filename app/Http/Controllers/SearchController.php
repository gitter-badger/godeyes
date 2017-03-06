<?php
namespace App\Http\Controllers;
use App\Models\Peoples;
use App\Models\Companys;
use App\Models\Carinfos;
use App\Models\Qqs;
use App\Models\Qq1s;
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
        if (empty($keywords)) {
            $keywords="";
        }
        $keywords_array=explode(' ',$keywords);
        $type=$input['type'];
        switch ($type) {
        case 'qq':
            $results=Qqs::where('username',$keywords);
            break;
        case 'people':
            $results=Peoples::where('name',$keywords)
                ->orWhere('phone',$keywords)
                ->orWhere('idcard',$keywords)
                ->orWhere('idcard',$keywords);
            if(count($keywords_array)>1)
            {
            $keywords=$keywords_array[0];
            $keyword1s=$keywords_array[1];
            var_dump($keywords.$keyword1s);
            $results=Peoples::where('name',$keywords)
                ->where('address','like','%'.$keyword1s.'%');
            }
            break;
        case 'company':
            $results=Companys::where('name','like','%'.$keywords.'%')
                ->orWhere('address','like','%'.$keywords.'%')
                ->orWhere('legalperson','like','%'.$keywords.'%');
            break;
        case 'carinfo':
            $results=Carinfos::where('name','like','%'.$keywords.'%')
                ->orWhere('phone','like','%'.$keywords.'%');
            break;
        default:
            break;
        }
        $count=$results->count();
        $results=$results->paginate(15);
        $endtime = explode(' ',microtime());
        $thistime = $endtime[0]+$endtime[1]-($starttime[0]+$starttime[1]);
        $thistime = round($thistime,3);
        $subtime=$thistime;
        return view('show')
            ->with('results',$results)
            ->with('count',$count)
            ->with('type',$type)
            ->with('subtime',$subtime)
            ->with('keywords',$keywords);
    }
}
