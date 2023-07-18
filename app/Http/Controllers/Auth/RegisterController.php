<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:restaurant');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function restaurantvalidator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:restaurants'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function showRestaurantRegisterForm()
    {
        return view('auth.register', ['authgroup' => 'restaurant']);
    }

    public function registerRestaurant(Request $request)
    {
        $this->restaurantValidator($request->all())->validate();

        event(new Registered($restaurant = $this->createRestaurant($request->all())));

        Auth::guard('restaurant')->login($restaurant);

        if ($response = $this->registeredRestaurant($request, $restaurant)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect(route('restaurant-home'));
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function createRestaurant(array $data)
    {
        return Restaurant::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    protected function registeredRestaurant(Request $request, $user)
    {
        //
    }
}
