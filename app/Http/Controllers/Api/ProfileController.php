<?

namespace App\Http\Controllers\Api;
use App\Service;
use App\Http\Controllers\ApiController;
use Dingo\Api\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Api\AuthController;
use Tymon\JWTAuth\Facades\JWTAuth;
class ProfileController extends ApiController
{

    public function me(Request $request)
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        $name = $request->input("name");
        $sourname = $request->input("name");
        $email = $request->input("email");
        $phone = $request->input("phone");
        if ($name){
            $user->name = $name;
        }
        if ($sourname){
            $user->sourname = $sourname;
        }
        if ($email){
            $user->email = $email;
        }
        if ($phone){
            $user->phone = $phone;
        }
        $user->save();
        unset($user->password);
        return response()->json($user, 200);
    }

    public function reset_pass(Request $request)
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        $oldpass = $request->input("old_password");
        $newpass = $request->input("new_password");

        if ($user->password = bcrypt($oldpass)){
            $user->password = bcrypt($newpass);
        }
        else return response()->json(['invalid_old_password'], 422);

        $user->save();

        return response()->json(["updated"], 200);
    }

    public function avatar(Request $request)
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }
        $img = $request->file('img');
        $pref = rand(1, 10000);
        $name = $pref.$img->getClientOriginalName();
        $img->move(public_path() . '/images/news/', $name);
        $user->img = "/public/assets/images/ava/" . $name;
        $user->save();
        return response()->json($user, 200);
    }


}