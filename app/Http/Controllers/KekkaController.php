<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Information;

class KekkaController extends Controller
{
   public function kensakuDB(Request $request)
   {
       $items = DB::table('Information')->simplePaginate(1);
       //$items = Information::orderBy($sort, 'asc')->Paginate(5);
       //$param = ['items' => $items, 'sort' => $sort];
       return view('kensaku.kensakuDB', ['items' => $items]);
   }
}