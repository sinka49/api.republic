<?

namespace App\Http\Controllers\Api;
use App\Service;
use App\Http\Controllers\ApiController;
use Dingo\Api\Http\Request;
use Illuminate\Support\Facades\Input;
class ServiceController extends ApiController
{

    public function index()
    {

        $sort = Input::get('sort');
        $offset = Input::get('offset');
        $limit = Input::get('limit');
        $tours = Service::where("id", ">=", 1);
        if ($offset){
            $tours->skip($offset);
        }
        if ($limit){
            $tours->take($limit);
        }
        if ($sort){
            $tours->orderBy('id',$sort);
        }

        return $tours->get();
    }

    public function store(Request $request)
    {


    }

    public function show(Request $request)
    {
        $tour = Service::findOrFail(Input::get('id'));
        return $tour;

    }

    public function update(Request $request, Tour $tour)
    {
        $tour->update($request->all());

        return response()->json($tour, 200);
    }

    public function delete(Tour $tour)
    {
        $tour->delete();

        return response()->json(null, 204);
    }
}