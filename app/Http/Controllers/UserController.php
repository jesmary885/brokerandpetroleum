<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Country;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use PasswordValidationRules;
 
    public function index(){

        return view('user.register');
    }

}
