<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class FormController extends Controller
{
    public function form()
    {
        return view('form.index');
    }

    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required',
            'avatar' => 'required|mimes:gif,jpg,png|max:' . (1024 * 10),
        ]);

        $customer = new Customer($request);
        $customer->store();

        $data = $customer->load();

        return view('form.index', ['data' => $data]);

        return redirect(route('signup'));
    }
}
