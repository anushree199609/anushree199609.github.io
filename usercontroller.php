<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class usercontroller extends Controller
{
    //
    public function index(){
    	return view('register');
    }

    public function save(Request $request){
    	if($request->isMethod('Post')){
    		$data=$request->all();
    		
    		$password=Hash::make($data['password']);
    		User::create([
    			'firstname'=>$data['firstname'],
    			'lastname'=>$data['lastname'],
    			'email'   =>$data['email'],
    			'decode_password'=>$data['password'],
    			'password'=> $password,
    			'phone'=>$data['phone'],

    		]);
    	
    	return redirect('/login');
        }


    }  

    public function login(Request $request){
    	return view('login');

    }
    public function loginuser(Request $request){ 
    	if($request->isMethod('Post')){
    		$data=$request->all();
			$user = User::where('email',$data['email'])->first();

        if (Hash::check($data['password'], $user->password)) {
        	return redirect('/userlist');
        }
        else{
        	return redirect()->back();
        }


     
    	
    	}

    	
    }
    public function userlist(){
    	$userlist = User::get();
    	return view('userlist',compact('userlist'));
    }
    public function edit(Request $request,$id){
    	$data = User::where('id',$id)->first();
    	if($request->isMethod('Post')){
    		$req =$request->all();
    		// $data->firstname=$req['firstname'];
    		// $data->lastname=$req['lastname'];
    		// $data->email=$req['email'];
    		// $data->phone=$req['phone'];
    		// $data->save();
    		User::where('id',$id)->update([
    			"firstname" => $req['firstname'],
    			"lastname"=>$req['lastname'],
    			"email"=>$req['email'],
    			"phone"=>$req['phone'],
    		]);
    		return redirect('/userlist');
    	}

    	return view('edituser',compact('data'));
      }

      public function delete(Request $request,$id){
      	$data=User::where('id',$id)->delete();

      	return redirect()->back();

      }

}
    		