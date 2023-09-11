<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ControllerPerumahan extends Controller
{
  public function daftarPerumahan()
  {
    $perumahans = DB::table('perumahans')->get();
    return view('perumahan',['perumahan'=> $perumahans]);
  }
 
}
