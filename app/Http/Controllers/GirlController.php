<?php

namespace App\Http\Controllers;

use App\Girl;
use App\PartsClass\GirlsFilter;
use Illuminate\Http\Request;

class GirlController extends Controller
{
    public function index(Request $request)
    {
        $girls = Girl::with('service');

        $girls = (new GirlsFilter($girls, $request))->apply()->get();


//        if($request->has('name')) {
//            $girls->where('name', 'like', "%$request->name%");
//        }
//
//        if($request->has('age')){
//            if($request->age > 0)
//            {
//                $girls->where('age', '=', $request->age);
//            }
//        }
//
//        if($request->has('model')) {
//            $girls->whereHas('service', function ($query){
//                $query->where('model', '=', 1);
//            });
//        }
//

//        $girls = $girls->get();

        return view('girl.index', compact('girls'));
    }
}
