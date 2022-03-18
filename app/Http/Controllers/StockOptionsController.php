<?php

namespace App\Http\Controllers;

use App\Models\StockOption;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreStockOptionRequest;

class StockOptionsController extends Controller
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
            $stock_options = StockOption::latest()->all();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($stock_options);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStockOptionRequest $request)
    {
        try {
            $stock_options = StockOption::create($request->validated());
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($stock_options);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:store_options,id'])->validated();
        try {
            $stock_option = StockOption::find($data['id']);
            if(!$stock_option) return $this->fail('StockOption not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($stock_option);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStockOptionRequest $request, $id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:store_options,id'])->validated();
        try {
            $stock_option = StockOption::find($data['id']);
            if(!$stock_option) return $this->fail('StockOption not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($stock_option->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:store_options,id'])->validated();
        try {
            $stock_option = StockOption::find($data['id']);
            if(!$stock_option) return $this->fail('StockOption not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($stock_option->delete());
    }
}
