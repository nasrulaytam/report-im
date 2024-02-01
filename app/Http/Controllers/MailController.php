<?php

namespace App\Http\Controllers;

use App\Mail\MonthlyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        // // Ambil semua user yang terdaftar
        // $users = User::all();

        // // Kirim email kepada semua user
        // foreach ($users as $user) {
        //     Mail::to($user->email)->send(new MonthlyEmail());
        // }
    }
}
