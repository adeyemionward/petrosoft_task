<?php

namespace App\Http\Controllers;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$data = Visitor::all();
        $data = DB::table('visitors')->orderBy('created_at', 'desc')->paginate(5);
        return view('home', compact('data'));

    }

    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/');
    }
   
}
