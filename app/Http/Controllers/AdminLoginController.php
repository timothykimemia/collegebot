<?php

namespace App\Http\Controllers;

use App\AdminLogin;
use App\ViewQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginFrame()
    {
        return view('admin/login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function login(Request $request)
    {
        /*$request->validate([
             'username'=>'required|min:8|max:16',
             'password'=>'required|min:8|max:64',
        ]);*/

//        dd(Auth::attempt(['username'=>$request['username'],'password'=>$request['password']]));

        if(! Auth::attempt(['username'=>$request['username'],'password'=>$request['password']])){
            return redirect()->back()->with([ 'fail' => 'Could Not Log You In' ]);
        }

        $result = viewQuestion::orderBy('id', 'DESC')->get();
        return view('admin.viewQuestion', ['result' => $result]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function logout(request $request)
    {
//        $request->session()->flush('password');
//        $request->session()->flush('username');

        Auth::logout();

        return view('admin.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\AdminLogin  $adminLogin
     * @return \Illuminate\Http\Response
     */
    public function show(AdminLogin $adminLogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminLogin  $adminLogin
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminLogin $adminLogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminLogin  $adminLogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminLogin $adminLogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminLogin  $adminLogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminLogin $adminLogin)
    {
        //
    }
}
