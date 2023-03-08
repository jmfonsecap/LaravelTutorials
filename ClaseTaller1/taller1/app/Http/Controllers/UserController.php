<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $viewData = [];

        $viewData['title'] = 'Users - Taller1';

        $viewData['subtitle'] = 'List of users';

        $viewData['users'] = User::all();

        return view('user.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $user = User::findOrFail($id);

        $viewData['title'] = $user['name'].' - Taller1';

        $viewData['subtitle'] = $user['name'].' - User information';

        $viewData['user'] = $user;

        $viewData['id'] = $id;

        return view('user.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view

        $viewData['title'] = 'Register User';

        return view('user.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        $request->validate([

            'name' => 'required',

            'email' => 'required',

            'phoneNumber' => 'required',

            'address' => 'required',

            'paymentMethod' => 'required',

            'postalCode' => 'required',

            'country' => 'required',

        ]);

        User::create($request->only(['name', 'email', 'phoneNumber', 'address', 'paymentMethod', 'postalCode', 'country']));

        return view('user.succesful');
    }

    public function delete(string $id)
    {
        $viewData = [];

        $viewData['title'] = 'Users - Taller1';

        $viewData['subtitle'] = 'List of users';

        User::where('id', $id)->delete();

        $viewData['users'] = User::all();

        return view('user.index')->with('viewData', $viewData);
    }
}
