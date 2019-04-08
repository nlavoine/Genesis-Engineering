<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('user.index', ['user' => $user]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    public function editmdp(User $user)
    {
        return view('user.editmdp', ['user' => $user]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        if (auth()->guest()) {
            return redirect('/connexion');
        }

        $user = auth()->user();

        auth()->user()->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
        ]);
        $user->save();

        return redirect()->route('user.index')->with('infosuccess', 'Mise à jour de vos infos effectué avec succès !');
    }

    public function updatemdp()
    {
        if (auth()->guest()) {
            return redirect('/connexion');
        }

        $user = auth()->user();

        if(request('password') == request('password_confirm')){

            auth()->user()->update([
                'password' => bcrypt(request('password')),
            ]);
            $user->save();

            return redirect()->route('user.index')->with('mdpsucces', 'Mise à jour du mot de votre mot de passe effectué !');
        }


        return redirect()->route('user.editmdp', ['user' => $user])->with('mdperror', 'Erreur sur la confirmation du mot de passe.');
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
