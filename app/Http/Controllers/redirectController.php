<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class redirectController extends Controller
{
    //
    public function Redirect(){
        $loggedInUser = Auth::user();


        if( $loggedInUser->role->rank == 12) {
            return redirect('createuser');
        }
        if($loggedInUser->role->rank == 1){
            return view('customer/index');
        }

        if($loggedInUser->role->rank == 2){
            return view('maintenance/index');
        }

        if($loggedInUser->role->rank == 3){
            return view('maintenance/index');
        }

        if($loggedInUser->role->rank == 4){
            return view('maintenance/index');
        }

        if($loggedInUser->role->rank == 5){
            return view('inkoop/index');
        }

        if($loggedInUser->role->rank == 6){
            return view('inkoop/index');
        }

        if($loggedInUser->role->rank == 7){
            return view('inkoop/index');
        }

        if($loggedInUser->role->rank == 8){
            return view('sales/index');
        }

        if($loggedInUser->role->rank == 9){
            return view('sales/index');
        }

        if($loggedInUser->role->rank == 10){
            return view('finance/index');
        }

        if($loggedInUser->role->rank == 11){
            return view('finance/index');
        }
    }
}
