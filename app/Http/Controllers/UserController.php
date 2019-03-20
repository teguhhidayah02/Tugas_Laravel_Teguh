<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
<<<<<<< HEAD
    public function daftar ( Request $req)
    {
    	$data = User::where('name' , 'like' , "%{$req->keyword}%")->paginate(10);
    	return view('admin.pages.user.daftar',['data'=>$data]);
    }

     public function add()
=======
    public function daftar(Request $req)
    {
    	$data = User::where('name','like',"%{$req->keyword}%")->paginate(10);
    	return view('admin.pages.user.daftar',['data'=>$data]);
    }

    public function add()
>>>>>>> Eps.19
    {
    	return view('admin.pages.user.add');
    }

    public function save(Request $req)
    {
        \Validator::make($req->all(),[
<<<<<<< HEAD
            'name'=>'required|between:3,100',
            'email'=>'required|unique:users,email',
            'password'=>'required|min:6',
            'repassword'=>'required|same:password',
            'akses'=>'required',
        ])->validate();

        
=======
                'name'=>'required|between:3,100',
                'email'=>'required|unique:users,email',
                'password'=>'required|min:6',
                'repassword'=>'required|same:password',
                'akses'=>'required',
        ])->validate();

>>>>>>> Eps.19
    	$result = new User;
        $result->name = $req->name;
        $result->email = $req->email;
        $result->password = bcrypt($req->password);
        $result->akses = $req->akses;

        if($result->save()){
            return redirect()->route('admin.user')->with('result','success');
        } else {
            return back()->with('result','fail')->withInput();
<<<<<<< HEAD

=======
>>>>>>> Eps.19
        }
    }

    public function edit($id)
    {
<<<<<<< HEAD
        $data = User::where('id', $id)->first();
        return view('admin.pages.user.edit',['rc'=>$data]);
=======
        $data = User::where('id',$id)->first();
        return view('admin.pages.user.edit',['rc'=>$data]);

>>>>>>> Eps.19
    }

    public function update(Request $req)
    {
<<<<<<< HEAD
        \Validator::make($req->all(),[
            'name'=>'required|between:3,100',
            'email'=>'required|unique:users,email,'.$req->id,
            'password'=>'nullable|min:6',
            'repassword'=>'same:password',
            'akses'=>'required',
        ])->validate();
=======

        \Validator::make($req->all(),[
                'name'=>'required|between:3,100',
                'email'=>'required|unique:users,email,'.$req->id,
                'password'=>'nullable|min:6',
                'repassword'=>'same:password',
                'akses'=>'required',
            ])->validate();
>>>>>>> Eps.19

        if(!empty($req->password)){
            $field = [
                'name'=>$req->name,
                'email'=>$req->email,
                'akses'=>$req->akses,
                'password'=>bcrypt($req->password),
            ];
        } else {
             $field = [
                'name'=>$req->name,
                'email'=>$req->email,
                'akses'=>$req->akses,
            ];
        }

        $result = User::where('id',$req->id)->update($field);

        if($result){
            return redirect()->route('admin.user')->with('result','update');
        } else {
            return back()->with('result','fail');
        }
    }
<<<<<<< HEAD
}
=======

        public function delete(Request $req)
        {
           $result = User::find($req->id);

           if ( $result->delete() ) {
                return back()->with('result','delete');
           } else {
                return back()->with('result','fail-delete');
        }
    }
}

>>>>>>> Eps.19
