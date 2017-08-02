<?php
namespace App\Http\Controllers\Control;

use Illuminate\Http\Request;
use \Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $users = Auth::user()->name;

        $data = [
            'user' => $users
        ];
        return view('control.dashboard.dashboard', $data);
    }
}
