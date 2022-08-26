<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:api')->except('login');
    // }
    public function index()
    {
        //
    }
    public function getOutletList()
    {
        $data = Outlet::all();
        return response()->json([
            'status'=>'success',
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function outletPost(Request $request){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'photo'=>'required',
            
        ]);
        $array=[
            'name'=>$request->name,
            'address'=>$request->address,
            'open_time'=>$request->open_time,
            'close_time'=>$request->close_time,
            'visit_date'=>$request->visit_date,
            // 'photo'=>  implode($Photos),
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
        return response()->json([
            'status'=>'success',
            'data'=>$re
        ]);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $rol = User::where('email',$request->email)->where('role','field_user')->first();
        if($rol){
       

        $credentials = $request->only('email', 'password');
        
        $token = Auth::attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();
        return response()->json([
                'status' => 'success',
                'user' => $user,
                'authorisation' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Unauthorized',
        ], 401);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = Auth::login($user);
        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
