<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rule = [
            'email'=>'required',
            'password'=>'required'
        ];
        $message = [
            'email.required' => 'Bạn chưa nhập email',
            'password.required'=> 'Bạn chưa nhập mật khẩu'
        ];
        $validator = Validator::make($request->all(),$rule,$message);
        if ($validator->fails()) {
            return response()->json([
                'success'=>false,
                'message'=>$validator->errors()->first()
            ],422);
        }
        else {
            $email = $request->input('email');
            $password = $request->input('password');
            if( Auth::guard('web')->attempt(['email' => $email, 'password' =>$password],$request->has('remember'))) {
                return response()->json([
                'success' => true,
                    'message'=>'Đăng nhập thành công'
                ], 200);
            }
            else {
                return response()->json([
                    'success' => false,
                    'message'=>'Sai thông tin đăng nhập'
                ], 422);
            }
        }
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/admin/login');
    }
    public function viewLogin()
    {
        if (Auth::guard('web')->check() ) {

            return redirect('/admin/home');
        }
        return view('backend.login');
    }
}
