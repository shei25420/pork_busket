<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use App\Http\Requests\StoreChefRequest;
use Illuminate\Support\Facades\Validator;

class ChefsController extends Controller
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
            $chefs = Chef::latest()->first();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($chefs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChefRequest $request)
    {
        $data = $request->validated();
        try {
            $chef = Chef::create($data);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($chef);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:chefs,id'])->validated();
        try {
            $chef = Chef::with('orders')->where('id', $data['id'])->first();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($chef);
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
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:chefs,id'])->validated();
        try {
            $chef = Chef::find($data['id']);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($chef->delete());
    }

    public function done(Request $request) {
        $data = $request->validate(['id' => 'required|numeric|exists:orders,id']);
        try {
            $order = auth('chefs')->user()->orders()->where('id', $data['id'])->first();
            if(!$order) return $this->fail('Chef not found', 404);

            $order->status = 2;
            $order->done = NOW();
            $order->save();

            //Send Order To Waiter Responsible
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
    }
}
