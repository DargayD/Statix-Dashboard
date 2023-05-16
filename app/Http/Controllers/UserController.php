<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->seat = $request->input('seat');
        $user->seatName = $request->input('seatName');
        $user->save();

        // Assign the seat name based on price
        $seatName='';
        if ($user->seat == 100) {
            $seatName = 'Economy';
        } else if ($user->seat == 300) {
            $seatName = 'First-class';
        }

        $user->seatName = $seatName;
        $user->save();

        return view('book', ['successMessage' => 'User created successfully']);
    }

    public function getTotalBookings()
    {
        $totalBookings = User::count();
        $totalEarnings = User::sum('seat');
        return [
            'totalBookings' => $totalBookings,
            'totalEarnings' => $totalEarnings,
        ];
    }

    public function displayData()
    {
        $users = User::all();
        $seatNames = User::pluck('seatName')->toArray();
        $totals = $this->getTotalBookings();
        $totalBookings = $totals['totalBookings'];
        $totalEarnings = $totals['totalEarnings'];

        return view('dashboard', compact('users', 'seatNames', 'totalBookings', 'totalEarnings'));
    }
}
