<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    use ApiResponder;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $orders = Order::latest()->get();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($orders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
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
        try {

        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
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
        try {

        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
    }

    public function makeOrder() {

    }
}
