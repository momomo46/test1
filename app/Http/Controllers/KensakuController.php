<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Information;

class KensakuController extends Controller
{
  
   public function kankou(Request $request)
   {
       return view('kankou.kankou');
   }

   public function kankouarea(Request $request)
   {
       return view('kankou.kankouarea');
   }

   public function insyoku(Request $request)
   {
       return view('insyoku.insyoku');
   }

   public function insyokuarea(Request $request)
   {
       return view('insyoku.insyokuarea');
   }

   public function syukuhaku(Request $request)
   {
       return view('syukuhaku.syukuhaku');
   }

   public function syukuhakuarea(Request $request)
   {
       return view('syukuhaku.syukuhakuarea');
   }

   public function kensakuDB(Request $request)
   {
       $items = Information::all();
       return view('kensaku.kensakuDB', ['items' => $items]);
   }
}