<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\CustomerEmployee;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $salesmans = Employee::all();
        return view('auth.register')->with('salesmans', $salesmans);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());

        $request->validate(
        [
            'rif'   => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'salesmans' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create(
            [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            ]
        );
        $user->assignRole('Customer');

        $customer = Customer::create(
            [
                'user_id' => $user->id,
                'rif' => $request->rif,
            ]
        );
// dd($customer->id, $request->salesmans);
        foreach ( $request->salesmans as $seller) {

            CustomerEmployee::create(
                [
                    'customer_id' => $customer->id,
                    'employee_id' => $seller,
                ]
            );

        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
