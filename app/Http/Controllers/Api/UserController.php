<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $dataUsers = $user::orderBy('name', 'asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data ditemukan',
            'dataUsers'=> $dataUsers,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dataUsers = new User;

        $rules = [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'=>false,
                'message' => 'Gagal memasukkan data',
                'data' => $validator->errors()
            ]);
        }

        $dataUsers->name = $request->name;
        $dataUsers->username = $request->username;
        $dataUsers->email = $request->email;
        $dataUsers->password = $request->password;

        $post = $dataUsers->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses memasukkan data'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 
        $dataUsers = User::find($id);
        if($dataUsers){
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'dataUsers' => $dataUsers
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $dataUsers =  User::find($id);

        if(empty($dataUsers)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $rules = [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status'=>false,
                'message' => 'Gagal melakukan update data',
                'data' => $validator->errors()
            ]);
        }

        $dataUsers->name = $request->name;
        $dataUsers->username = $request->username;
        $dataUsers->email = $request->email;
        $dataUsers->password = $request->password;

        $post = $dataUsers->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan update data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $dataUsers =  User::find($id);

        if(empty($dataUsers)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $post = $dataUsers->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan delete data'
        ]);
    }
}
