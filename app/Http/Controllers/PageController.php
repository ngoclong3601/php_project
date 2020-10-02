<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Hash;
class PageController extends Controller
{
    
    public function getregister(){
        return view('register');
    }
    public function postregister(Request $request){
        $this->validate($request, array(
                'username' => 'required',
                'email' => 'required|email',
                'password'=> 'required',
                'name'=> 'required',
                
        ));
        
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->company_name = $request->company_name;
        $user->save();
                
        return redirect()->route('home')->with('messeage','Bạn đã tạo tài khoản thành công');
                 
        } 
        
        // $id = User::find($abc)
        
        public function getLogin(Request $request){
            return view('home');
        }
        public function postLogin(Request $request){
            // $data = Input::except( array( '_token' ) );
            $arr = [
                'username' => $request->username , 
                'password'=> $request->password
            ];
             if(Auth::attempt($arr)){
                 if(Auth::check()){
                    $id_user =  Auth::User()->id_user;
                    $role= \DB::table('users')
                    ->where('users.id_user','=',$id_user)
                    ->join('role', 'users.id_role', '=', 'role.id_role')
                    ->select('role.id_role as id')
                    ->first();
                   if ($role->id==1) {
                        return view('/employee_dashboard');
                    } elseif($role->id==2) {
                        return view('candidate');
                    }
                    return back()->with('error', 'Wrong Login Detail');
                    
                 }
                   
                }
                 
            }
            
             function logout()
            {   
                
                Auth::logout();
                return redirect('/');
            }
    }
   

 

