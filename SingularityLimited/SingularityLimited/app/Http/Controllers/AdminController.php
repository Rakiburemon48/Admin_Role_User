<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Outlet;
class AdminController extends Controller
{
    function __construct()  {
        $this->middleware('auth')->except('index');
    }
    function outlet(){
        $data = Auth::user();
        
        return view('admin.outlet',compact('data'));
    }
    function createOutlet(Request $request){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'open_time'=>'required',
            'close_time'=>'required',
            'photos'=>'required',
            'visit_date'=>'required',
        ]);
        $array=[
            'name'=>$request->name,
            'address'=>$request->address,
            'open_time'=>$request->open_time,
            'close_time'=>$request->close_time,
            'visit_date'=>$request->visit_date,
        ];
        $files = [];
        if($request->file('photos')){
            foreach ($request->file('photos') as $key => $photo) {
                $key++;
                // $photo = $request->file('photos');
                $path = 'photo/outletPhoto/';
                $name = $request->name.$key. date('Ymdhis').'.'.$photo->getClientOriginalExtension();
                $photo->move($path,$name);
                $files[] = $name;
                $array['photo'] = json_encode($files);
            }
           
        }
        $re = Outlet::create($array);
        if($re){
            return redirect(route('outletList'));
        }
    }
    function outletList(){
        $data = Auth::user();
        $outlet =Outlet::orderBy('id','desc')->get();
        return view('admin.outletList',compact('data','outlet'));
    }
    function editOutlet($id){
        $data = Auth::user();
        $outlet = Outlet::find($id);
        return view('admin.editOutlet',compact('data','outlet'));
    }
    function updateOutlet(Request $request, $id){
        $outlet = Outlet::find($id);
        $array=[
            'name'=>$request->name,
            'address'=>$request->address,
            'open_time'=>$request->open_time,
            'close_time'=>$request->close_time,
            'visit_date'=>$request->visit_date,
        ];
        $files = [];
        if($request->file('photos')){
            foreach ($request->file('photos') as $key => $photo) {
                $key++;
                // $photo = $request->file('photos');
                $path = 'photo/outletPhoto/';
                $name = $request->name.$key. date('Ymdhis').'.'.$photo->getClientOriginalExtension();
                $photo->move($path,$name);
                $files[] = $name;
                $array['photo'] = json_encode($files);
            }
           
        }
        $re = $outlet->update($array);
        if($re){
            return redirect(route('outletList'));
        }
    }
    function deleteOutlet(Request $request ,$id){
        $outlet = Outlet::find($id);
        $re = $outlet->delete();
        if($re){
            return redirect(route('outletList'));
        }
    }
    function report($id){
        $data = Auth::user();
        $outlet = Outlet::find($id);
        
        
            return view('admin.report',compact('data','outlet'));
       
    }
}
