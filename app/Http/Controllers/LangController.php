<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function index($locale)
    {
        Session::put('locale', $locale);

        return redirect()->back();
    }
}
