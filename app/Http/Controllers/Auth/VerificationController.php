<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use App\User;
class VerificationController extends Controller
{
   public function index($id) {
       $user = User::find($id);
       if(! empty($user)){
           $user->email_verified_at = date('Y-m-d');
           $user->save();
           return redirect('login')->with('exito',"Cuenta validada con exito");
       }
   }
}
