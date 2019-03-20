<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserSettingController extends Controller
{
    public function form()
    {
    	$data = User::where('id',Auth::id())->first();
    	return view('admin.pages.user.setting',['dt'=>$data]);
    }

    public function update(Request $req)
    {
    	$id = Auth::id();
<<<<<<< HEAD
    	\Validator::make($req->all(),[
=======
    	\Validator::make($req->all(), [
>>>>>>> Eps.19
    		'name'=>'required|between:3,100',
    		'email'=>'required|email|unique:users,email,'.$id,
    		'password'=>'nullable|min:6',
    		'repassword'=>'same:password',
    	])->validate();

<<<<<<< HEAD

        if(!empty($req->password)){
            $field = [
                'name'=>$req->name,
                'email'=>$req->email,
                'password'=>bcrypt($req->password),
            ];
        } else{
            $field = [
                'name'=>$req->name,
                'email'=>$req->email,
            ];
        }

        $result = User::where('id',$id)->update($field);

    	if($result){
            return back()->with('result','success');
        } else {
            return back()->with('result','fail');
        }
=======
    	if(!empty($req->password)){
    		 $field = [
    		 	'name'=>$req->name,
    		 	'email'=>$req->email,
    		 	'password'=>bcrypt($req->password),
    		 ];
    	} else {
    		 $field = [
    		 	'name'=>$req->name,
    		 	'email'=>$req->email,
    		 ];
    	}

    	$result = User::where('id',$id)->update($field);

    	if($result){
    		return back()->with('result','success');
    	} else {
    		return back()->with('result','fail');
    	}
>>>>>>> Eps.19
    }
}
