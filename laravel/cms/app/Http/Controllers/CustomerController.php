<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = DB::table('customers')->where('email', $email)->first();

        // dd($user);
        if ($email == $user->email && $password == $user->password) {

            session_start();
            $_SESSION['user'] = $user;
            // dd($_SESSION['user']->id);
            if ($user->role_id == 1) {
                return redirect('admindashbord');
            } else {
                return redirect('cushome');
            }
        } else {
            return redirect('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function uploadimg(Customer $customer, Request $request)
    // {
    //     dd($request);
    //     $file = $request->file('file');
    //     $file->move('images', $file->getClientOriginalName());
    // }

    public function store(Customer $customer, Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'file' => 'required|file|mimes:jpg,png,jpeg|max:2048',

        ]);

        $file = $request->file('file');
        $imageName = time() . '.' . $file->extension();
        $file->move('images', $imageName);

        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->company = $request->company;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;
        $customer->logo = $imageName;
        $customer->tags = $request->tags;
        $customer->password = $request->password;
        $customer->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        // dd("hii");
        $cdata = $customer::get();
        echo $cdata;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Customer $customer)
    {
        return $customer::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Customer $customer)
    {
        $imageName = $request->logo_old;
        if ($request->file('file')) {

            $file = $request->file('file');
            $imageName = time() . '.' . $file->extension();
            $file->move('images', $imageName);
        }

        $updatec = $customer::find($id);
        $updatec->firstname = $request->firstname;
        $updatec->lastname = $request->lastname;
        $updatec->company = $request->company;
        $updatec->email = $request->email;
        $updatec->mobile = $request->mobile;
        $updatec->logo = $imageName;
        $updatec->tags = $request->tags;
        $updatec->password = $request->password;
        $updatec->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Customer $customer)
    {
        $cusbyid = $customer::find($id);
        $cusbyid->delete();
    }
}
