<?php

namespace App\Http\Controllers;

use App\Models\FoodRecommend;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException; // QueryException

class FoodRecommendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodRecommend = FoodRecommend::orderBy('id')->get();
        $res = [
            'message' => 'List population order by id',
            'data' => $foodRecommend
        ];

        return response()->json($res, Response::HTTP_OK);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $foodRecommend = FoodRecommend::create($request->all());
            $res = [
                'message'=> 'FoodRecommend created',
                'data' => $foodRecommend
            ];
            // HTTP CODE 201
            return response()->json($res, Response::HTTP_CREATED);
        }catch(QueryException $e){
            return response()->json(['message'=>'Failed ' . $e->errorInfo]);
        }
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
        //
    }
}
