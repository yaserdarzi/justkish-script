<?php

namespace App\Http\Controllers\Api\V1\Site;

use App\Category;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class CategoryController extends ApiController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categoryInfo = Category::
        select('*', DB::raw("CASE WHEN icon != '' THEN (concat ( '" . url('') . "/files/category/', icon) ) ELSE '' END as icon"))
            ->orderBy('sort')->get();
        return $this->respond($categoryInfo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        //
    }

    ///////////////////public function///////////////////////

    public function categoryProducts(Request $request)
    {
        $categoryInfo = Category::with('products')->
        select('*', DB::raw("CASE WHEN icon != '' THEN (concat ( '" . url('') . "/files/category/', icon) ) ELSE '' END as icon"))
            ->orderBy('sort')->get();
        return $this->respond($categoryInfo);
    }
}
