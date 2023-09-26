<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\StatefulGuard;

class RegisterController extends Controller
{
    use PasswordValidationRules;

    protected $guard;

    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

 
    public function index(){
        //return view('auth.register');
    }

    public function create(Request $request)
    {
   
       /* $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'dni' => ['required'],
            'direction' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ]);

            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'direction' => $request['direction'],
                'phone' => $request['phone'],
                'password' => Hash::make($request['password']),
                'status' => 'activo',
                'points' => 0,
                'points_residual' => 0,
                'dni' => $request['dni'],
                'rango_id' => 1,
                'acum_points' => 0,
                'points_global' => 0,
            ])->assignRole('cliente');*/

            
    }
}
