<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Verzoek;
use Illuminate\Support\Facades\DB;
use \App\Models\Bedrijf;

class VerzoekController extends Controller
{
    public function index()
    {
        $verzoeken = Verzoek::orderBy('created_at', 'desc')->paginate(6);
        return view('verzoeken', compact('verzoeken'));
    }

    public function view(Verzoek $verzoek)
    {
        return view('verzoek', compact('verzoek'));
    }

    public function sturen()
    {
        return view('verzoeksturen');
    }

    public function store(Request $request)
    {
        $request->validate([
            'verzoek_titel' => 'required',
            'verzoek_omschrijving' => 'required',
            'verzoek_body' => 'required',
            'verzoek_beloning' => 'required',
            'bedrijf_naam' => 'required',
            'bedrijf_email' => 'required',
            'bedrijf_telefoon' => 'required',
            'bedrijf_website' => 'required',
        ]);

        Bedrijf::create(
            [
                'bedrijf_naam' => $request->bedrijf_naam,
                'bedrijf_email' => $request->bedrijf_email,
                'bedrijf_telefoon' => $request->bedrijf_telefoon,
                'bedrijf_website' => $request->bedrijf_website
            ]
        );

        $bedrijf_id = DB::table('bedrijven')->where('bedrijf_naam', $request->bedrijf_naam)->value('id');

        Verzoek::create(
            [
                'verzoek_titel' => $request->verzoek_titel,
                'verzoek_omschrijving' => $request->verzoek_omschrijving,
                'verzoek_status' => 'Open',
                'verzoek_body' => $request->verzoek_body,
                'verzoek_beloning' => $request->verzoek_beloning,
                'bedrijf_id' => $bedrijf_id
            ]
        );

        return redirect('/verzoeken');
    }
}