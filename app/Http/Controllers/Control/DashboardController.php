<?php
namespace App\Http\Controllers\Control;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        $data = [
            'featureds' => 'wola'
        ];
        return view('control.dashboard.dashboard', $data);
    }
}
