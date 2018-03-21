<?php

namespace App\Http\Controllers;

use App\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
  public function show() {
    $offres = Offre::all();
    dd($offres);
  }

  public function addOne() {
    return view('insertOffre');
  }
}
