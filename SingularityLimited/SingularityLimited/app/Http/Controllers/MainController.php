<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\AdminRequest;
use App\Http\Middleware\AdminCheck;


class MainController extends Controller
{
    function __construct()  {
        $this->middleware(['auth'])->except('index');
    }

   function index() {
        
        return view('admin.index');
    }

   function dashboard() {
        
            $data = Auth::user();
            return view('admin.dashboard',compact('data'));
           
    }
    function addAdmin(){
        $data = Auth::user();
        return view('admin.addAdmin',compact('data'));
    }
    function createAdmin(AdminRequest $request){
        $v = $request->validated();
        $array =[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
        ];
        $re = User::create($array);
        if($re){
            return redirect(route('adminList'));
        }
    }
    function adminList(){
        $data = Auth::user();
        $users = User::orderBy('id','desc')->get();
        return view('admin.adminList',compact('data','users'));
    }
    function editAdmin($id){
        $data = Auth::user();
        $user = User::find($id);
        return view('admin.editAdmin',compact('data','user'));
    }
    function updateAdmin(Request $request, $id ){
        $user = User::find($id);
        $array =[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
        ];
        $re = $user->update($array);
        if($re){
            return redirect(route('adminList'));
        }
    }
    function deleteAdmin(Request $request,$id){
        $user = User::find($id);
        $re = $user->delete();
        if($re){
            return redirect(route('adminList'));
        }
    }
}
