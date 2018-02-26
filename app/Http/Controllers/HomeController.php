<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        \Mail::raw($request->message , function ($message) use($request) {
            $message->from($request->email, $request->name)
                ->to('aleksey.kostenko.dev@gmail.com')->cc('canal@i.ua');
        });

        return true;
    }
}
