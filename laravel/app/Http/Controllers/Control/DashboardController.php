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
        $user_level = Auth::user()->level;

        $data = [
            'user' => $users,
            'user_level' => $user_level
        ];
        return view('control.dashboard.dashboard', $data);
    }
}
