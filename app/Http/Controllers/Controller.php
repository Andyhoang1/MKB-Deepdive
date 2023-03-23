<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use \App\Models\Verzoek;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $verzoeken = Verzoek::latest()->take(3)->get();
        return view('index', compact('verzoeken'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function storeContact()
    {
        $data = request()->validate([
            'naam' => 'required',
            'email' => 'required|email',
            'bericht' => 'required',
        ]);
        DB::table('contact')->insert([
            'naam' => $data['naam'],
            'email' => $data['email'],
            'bericht' => $data['bericht'],
        ]);

        return redirect('/contact')->with('message', 'Uw bericht is verzonden!');
    }
}