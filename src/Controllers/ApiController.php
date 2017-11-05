<?php
/**
 * Created by PhpStorm.
 * User: Milad
 * Date: 10/18/2017
 * Time: 12:51 PM
 */

namespace LimoCode\LaravelRestfulApi\Controllers;


use App\Http\Controllers\Controller;
use App\User;
use LimoCode\LaravelRestfulApi\Traits\Respondable;

//use Illuminate\Support\Facades\Response;

class ApiController extends Controller
{
    use Respondable;


    protected $paginateLimit = 5;

    protected $user;

    protected $authenticatable;

    /**
     * ApiController constructor.
     * @param $paginatorLimit
     */
    public function __construct()
    {
        $this->setPaginatorLimit(request('limit'));
//        $this->user = User::where('email', request()->getUser())->first();
//        $this->authenticatable = $this->user->authenticatable;
    }

    /**
     * @param int $paginateLimit
     * @internal param int $paginatorLimit
     */
    public function setPaginatorLimit($paginateLimit = 5)
    {
        if ($paginateLimit) {
            $this->paginateLimit = $paginateLimit;
        }
    }
}