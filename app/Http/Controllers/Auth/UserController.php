<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }
    public function index(){
        Redis::set('name', 'Taylor');
        $name = Redis::get('name');
        //$user = DB::table('sys_user')->get(); //取出全部数据
        //$user = DB::table('sys_user')->where('login_name', 'admin')->first();//取出一条数据
        /*$user = DB::table('sys_user')->where('login_name', 'admin')->value('user_name');//取出某字段的值
        print_r($user);*/
        var_dump($name) ;
        echo "indexindex";
    }
}
