<?php

namespace App\Http\Controllers\Admin;

use App\Bundle;
use App\BundleType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BundleController extends Controller
{
    public function index()
    {
        $bundles = DB::table('bundles')
            ->select(['bundles.*','bundle_types.name'])
            ->join('bundle_types', 'bundles.type_id', '=', 'bundle_types.id')
            ->get();

        return view('bundle.index',compact('bundles'));
    }

    public function create(Request $request)
    {
        $types = BundleType::all();
        return view('bundle.create',compact('types'));
    }

    public function add(Request $request)
    {
        $bundle = new Bundle();
        $bundle->type_id = $request->type;
        $bundle->title = $request->title;
        $bundle->description = $request->description;
        $bundle->price = $request->price;
        $bundle->save();

        return redirect('admin/bundles');
    }
}
