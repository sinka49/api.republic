<?

namespace App\Http\Controllers\Api;
use App\City;
use App\Rest;
use App\Tour;
use App\Dot;
use App\Http\Controllers\ApiController;
use Dingo\Api\Http\Request;
use App\Tour_image;
use Illuminate\Support\Facades\Input;
class TourController extends ApiController
{

    public function index()
    {

        $sort = Input::get('sort');
        $offset = Input::get('offset');
        $limit = Input::get('limit');
        $tours = Tour::where("id", ">=", 1);
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
            $temp = explode(",", $tour->type_rests);
            $tour->type_rests =  Rest::whereIn('id',$temp)->get();
            $temp = explode(",", $tour->dots);
            $tour->dots =  Dot::whereIn('id',$temp)->get();
            $tour->images =  Tour_image::where('id_tour',$tour->id)->get();
            foreach ($tour->dots as $dot){
                $temp = $dot->city;
                $dot->city = City::find($temp);
            }
        }

        return response()->json($tours);
    }

    public function store(Request $request)
    {

        $id = Input::get('id');

        return response()->json($tour, 201);
    }

    public function show(Request $request)
    {
        $id = Input::get('id');
        $tour = Tour::findOrFail($id);
        $temp = explode(",", $tour->type_rests);
        $tour->type_rests =  Rest::whereIn('id',$temp)->get();
        $temp = explode(",", $tour->dots);
        $tour->dots =  Dot::whereIn('id',$temp)->get();
        $tour->images =  Tour_image::where('id_tour',$tour->id)->get();
        foreach ($tour->dots as $dot){
            $temp = $dot->city;
            $dot->city = City::find($temp);
        }
        return  response()->json($tour);
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