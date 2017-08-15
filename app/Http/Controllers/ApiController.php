<?php
namespace App\Http\Controllers;
/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="/api",
 *     host="env(APP_URL)",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="Republic API",
 *         @SWG\Contact(name="Kris T"),
 *     ),
 *     @SWG\Definition(
 *         definition="Error",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 */
class ApiController extends Controller
{

}
