<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    // protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try
        {
            $token = \JWTAuth::attempt($credentials);

            if (!$token)
            {
                return response()->json([ 'error' => 'invalid_credentials' ], 401); // unauthorized request
            }
        }
        catch (JWTException $e)
        {
            return response()->json([ 'error' => 'could_not_create_token' ], 500); // internal error
        }

        return response()->json(compact('token'));
    }
}
