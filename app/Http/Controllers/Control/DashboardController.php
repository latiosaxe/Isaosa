<?php
namespace App\Http\Controllers\Control;

use Illuminate\Http\Request;

use App\Featured;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $featureds = Featured::all();

        $data = [
            'featureds' => $featureds
        ];
        return view('control.dashboard.dashboard', $data);
    }
}
