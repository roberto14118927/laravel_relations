<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// Importaciones del modelo
use App\Models\User;

// Importaciones recursos
use App\Http\Resources\V1\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return UserResource::collection($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|string|email|max:255|unique:users',
            'password'=> 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make( $request->get('name')),
        ]);

        return response($user, 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
        //Controlar exception dentro de un response
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


        $user = User::findOrFail($id);
        
        // $request->validate([
        //     'name' => 'max:255',
        //     'email' => 'email|max:255|unique:users,email,' . $user->id,
        //     'password' => 'min:6|confirmed',
        // ]);

        // $user->update($request->all());

        // return $user;

        $formato = [
            'email' => 'email|unique:users,email,' . $user->id,
            'password' => 'min:8|confirmed'
        ];

        $this->validate($request, $formato);

        if($request->has('name')){
            $user->name = $request->name;
            // return response()->json([$request->name],200);
        }

        if($request->has('email')){
            $user->email = $request->email;
        }

        if($request->has('password')){
            $user->email = bcrypt($request->email);
        }

        // if(!$user->isDirty()){
        //     return response()->json(['data'=>'No hay cambios'],200);
        // }

        $user->save();

        return response()->json(['data'=>$user],200);
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
