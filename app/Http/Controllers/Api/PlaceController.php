<?

namespace App\Http\Controllers\Api;
use App\City;

use App\Place;

use App\Http\Controllers\ApiController;
use Dingo\Api\Http\Request;
use Illuminate\Support\Facades\Input;
class PlaceController extends ApiController
{

    public function index()
    {

        $sort = Input::get('sort');
        $offset = Input::get('offset');
        $limit = Input::get('limit');
        $tours = Place::where("id", ">=", 1);
        if ($offset){
            $tours->skip($offset);
        }
        if ($limit){
            $tours->take($limit);
        }
        if ($sort){
            $tours->orderBy('id',$sort);
        }
        $tours = $tours->get();
        foreach ($tours as $tour){
            $temp = $tour->city;
            $tour->city = City::find($temp);
        }
        return $tours;
    }

    public function store(Request $request)
    {


    }

    public function show(Request $request)
    {
        $tour = Place::findOrFail(Input::get('id'));
        $temp = $tour->city;
        $tour->city = City::find($temp);
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