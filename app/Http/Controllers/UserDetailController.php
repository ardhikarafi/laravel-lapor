<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\UserDetail;

class UserDetailController extends Controller
{

    public function store(Request $request){

      $user = new UserDetail([
        'full_name' => $request->get('full_name'),
        'street_address' => $request->get('street_address'),
        'city' => $request->get('city'),
        'zip_code' => $request->get('zip_code')
      ]);

      $user->save();
      return redirect('/index');
    }
    public function index(){

      $users = UserDetail::all();

      return view('index', compact('users'));
    }

    public function downloadPDF($id){
      $user = UserDetail::find($id);

      $pdf = PDF::loadView('pdf', compact('user'));
      return $pdf->download('invoice.pdf');

    }
}