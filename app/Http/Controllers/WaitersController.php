<?php

namespace App\Http\Controllers;

use App\Models\Waiter;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use App\Http\Requests\StoreWaiterRequest;
use Illuminate\Support\Facades\Validator;

class WaitersController extends Controller
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
            $waiters = Waiter::with('orders')->latest()->get();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($waiters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWaiterRequest $request)
    {
        try {
            $waiter = Waiter::create($request->validated());
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($waiter);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:orders,id'])->validated();
        try {
            $waiter = Waiter::with('orders')->where('id', $data['id'])->first();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($waiter);
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
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:orders,id'])->validated();
        try {
            $waiter = Waiter::with('orders')->where('id', $data['id'])->first();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($waiter->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:orders,id'])->validated();
        try {
            $waiter = Waiter::with('orders')->where('id', $data['id'])->first();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($waiter->delete());
    }
}
