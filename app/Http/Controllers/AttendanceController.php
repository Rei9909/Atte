<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Suport\Facades\Auth;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('/');
    }
    public function start()
    {
        $user = Auth::id();
        $Attendance_start = Carbon::today();
    }
    public function end()
    {
        $user = Auth::id
    }
}
