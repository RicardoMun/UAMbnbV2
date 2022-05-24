<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Bill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\BillStoreRequest;
use App\Http\Requests\api\v1\BillUpdateRequest;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = Bill::orderBy('created_at', 'asc')->get();

        return response()->json(['data' => $bills], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BillStoreRequest $request)
    {
        $bill = Bill::create($request->all());

        return response()->json(['data' => $bill], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        return response()->json(['data' => $bill], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BillUpdateRequest $request, Bill $bill)
    {
        $bill->update($request->all());

        return response()->json(['data' => $bill], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        $bill->delete();
        return response(null, 204);
    }

}