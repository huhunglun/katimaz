<?php

namespace App\Http\Controllers\Admin;

use App\Portfolio;
use App\PortfolioType;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use File;
use Auth;
use DB;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = DB::table('portfolios')
            ->select(['portfolios.*','portfolio_types.name'])
            ->join('portfolio_types', 'portfolios.type_id', '=', 'portfolio_types.id')
            ->get();

        return view('admin.portfolio.index',compact('portfolios'));
    }

    /**
      * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $types = PortfolioType::all();
        return view('admin.portfolio.create',compact('types'));
    }

    public function add(Request $request)
    {
        $file = $request->file('img');
        $filename = time().'.'.$file->getClientOriginalExtension();

        $portfolio = new Portfolio();
        $portfolio->type_id = $request->type;
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->url = $request->url;
        $portfolio->save();

        $path = 'img/portfolio/'.$portfolio->id.'/';
        $filename = $path.$filename;
        $filepath = public_path($filename);

        $portfolio->img = $filename;
        $portfolio->save();

        if(!File::exists($path)){
            File::makeDirectory($path);
        }
        if($request->hasFile('img')){
            Image::make($file)->resize(600,450)->save($filepath);
        }
        return redirect('admin/portfolios');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portfolio::find($id)->delete();

        return redirect('admin/portfolios');
    }
}
