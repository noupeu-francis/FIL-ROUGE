<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function index()
    {
        $devis = Devis::orderBy('created_at', 'desc')->get();
        return view('admin.devis.index', compact('devis'));
    }
}
