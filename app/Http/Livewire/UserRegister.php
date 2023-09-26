<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Provincia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Jetstream\Jetstream;
use Livewire\Component;

class UserRegister extends Component
{
    public $name,$last_name,$phone,$email,$password,$password_confirmation;
    public $provincias = [],$countries;
    public $country_id, $provincia_id;

    protected $rules = [
        'name' => 'required|max:30|regex:/^[\pL\s\-]+$/u',
        'last_name' => 'required|max:30|regex:/^[\pL\s\-]+$/u',
        'email' => 'required|email|max:50|unique:users',
        'phone' => 'required|numeric|min:9',
        'country_id' => 'required',
        'provincia_id' => 'required',
        'password' => 'required|min:6|max:12',
    ];

    protected $rul_password_confirm = [
        'password' => 'required|confirmed',
    ];

    protected $listeners = ['render' => 'render'];

    public function mount(){

        $this->countries = Country::all();
        $this->country_id = "";
        $this->provincia_id = "";
    }



    public function updatedCountryId($value)
    {
        $country_select = Country::find($value);
        $this->provincias = $country_select->provincias;

    }


    public function render()
    {

        return view('livewire.user-register');
    }



    public function save(){

        $rules = $this->rules;
        $this->validate($rules);

        if($this->password == $this->password_confirmation){


            $user=User::create([
                'name' => $this->name .' '.$this->last_name,
                'email' => $this->email,
                'phone' => $this->phone,
                'country_id' => $this->country_id,
                'provincia_id' => $this->provincia_id,
                'status' => 'activo',
                'password' => Hash::make($this->password),
            ])->assignRole('cliente');

            Auth::guard()->login($user);

            return redirect(route("inicio"));
        }

        else{
            $rul_password_conf = $this->rul_password_confirm;
            $this->validate($rul_password_conf);
        }



    }


}
