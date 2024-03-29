<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class HomeController extends Controller
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
       /* Role::create(['name' => 'writer']);*/

      /*  Permission::create(['name' => 'write post']);*/

     //  auth()->user()->givePermissionTo('write post');

     // $user()->givePermissionTo('write post');

       //auth()->user()->assignRole('writer');

       // return auth()->user()->permissions;

       //return auth()->user()->getDirectPermissions();

        return view('home');
    }
}
