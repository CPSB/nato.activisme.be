<?php

namespace App\Http\Controllers;

use App\Countries;
use App\Http\Requests\SupportValidator;
use App\SingleSupport;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        $signatures = new SingleSupport;
        $countries  = Countries::all();
        $results    = $signatures->paginate(25);

        return view('support.index', compact('signatures', 'countries', 'results'));
    }

    public function store(SupportValidator $input)
    {
        if (SingleSupport::create($input->except(['_token']))) {
            session()->flash('class', 'alert alert-success');
            session()->flash('message', 'U het zich succesvol aangesloten bij dit verdag.');

            return back(302);
        }
    }
}
