<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Suport\Facades\Attedb;
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
        $newAttendance = Carbon::today();

        Attendance::create([
            'user_id' => $user_id,
            'start_time' => Carbon::now(),
            'date' => $newAttendance
        ]);
    }

    public function end()
    {
        $attendance->update([
            'end_time' => Carbon::now()
        ]);
    }

    public function getAttendance()
    {
         // 1ページに5件新着順で表示
        $items = Attedb::simplePaginate(5);
        return view('/attendance', ['items' => $items]);
    }
}
