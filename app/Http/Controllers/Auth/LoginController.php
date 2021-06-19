<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use http\Env\Request;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Сразу после входа выполняем редирект и устанавливаем flash-сообщение
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    protected function authenticated($request, $user) {
        return redirect()->route('user.index')
            ->with('success', 'Вы успешно вошли в личный кабинет');
    }

    /**
     * Сразу после выхода выполняем редирект и устанавливаем flash-сообщения
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    protected function loggedOut($request) {
        return redirect()->route('user.login')
            ->with('success', 'Вы успешно вышли из личного кабинета');
    }
}
