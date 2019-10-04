<?php

namespace App\Http\Controllers\Module;

//Library
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use Str;
use Lcobucci\JWT\Parser;

//Model
use App\User;
use App\Token;

class MainController extends Controller
{

    public $successCode = 200;
    public $failCode = 400;

    //Index Page
    public function index()
    {
        return view('app');
    }

    //Resource API
    public function logapi()
    {
        $data = DB::table('log')->where('site_id', '=', '00001')->first();
        return response()->json(['data' => $data], 200);
    }
    public function logout(Request $request)
    {
            $value = $request->bearerToken();
            $token = (new \Lcobucci\JWT\Parser())->parse($value)->getHeader('jti');
            $token = $request->user()->tokens->find($token);
            $token->delete();
    }

    public function login()
    {
            if(Auth::attempt(['email' => request('email'), 'password' => request('password')]))
            {
                $user = Auth::user();
                $checktoken = DB::table('oauth_access_tokens')->where('name', '=', Auth::user()->id)->first();
                $userrmbr = User::where('id', '=', Auth::user()->id)->first();
                $userdata = User::where('id', '=', Auth::user()->id)->get();
                $userrmbr->remember_token = Str::random(100);
                $userrmbr->save();
                if($checktoken){
                    return response()->json(['response' => ['message' => 'This user already logged in'], 'status' => 'error'], 203);
                }else{
                    $success['token'] = $user->createToken(Auth::user()->id)->accessToken;
                    return response()->json(['response' => ['token' => $success, 'userinfo' => $userdata], 'status' => 'success'], 200);
                }
            }else{
                return response()->json(['response' => ['message' => 'Request doesnt match with our requirement'], 'status' => 'error'], 201);
            }
    }
}
