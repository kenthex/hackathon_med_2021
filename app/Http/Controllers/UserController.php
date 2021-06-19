<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
        return view('user.user');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function save_main($id, Request $request)
    {
        $user = Auth::user();
        $user->age = $request->age;
        $user->height = $request->height;
        $user->weight = $request->weight;
        $user->lifestyle = $request->lifestyle;
        $user->save();

        return redirect('user/index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function save_blood($id, Request $request)
    {
        $user = Auth::user();
        $user->hemoglobin = $request->hemoglobin;
        $user->cholesterol = $request->cholesterol;
        $user->vit_a = $request->vit_a;
        $user->vit_b1 = $request->vit_b1;
        $user->vit_b3 = $request->vit_b3;
        $user->vit_b6 = $request->vit_b6;
        $user->vit_b12 = $request->vit_b12;
        $user->vit_c = $request->vit_c;
        $user->vit_d = $request->vit_d;
        $user->vit_e = $request->vit_e;
        $user->vit_k = $request->vit_k;
        $user->save();

        return redirect('user/index');
    }
}
