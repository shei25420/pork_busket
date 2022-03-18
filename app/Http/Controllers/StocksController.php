<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Support\Str;
use App\Models\StockProduct;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStockRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\AddStockProductRequest;
use App\Http\Requests\RemoveStockProductRequest;

class StocksController extends Controller
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
            $stocks = Stock::latest()->get();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($stocks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStockRequest $request)
    {
        try {
            $stock = Stock::create($request->validated());
        
            $stock_products = explode(',', $request->safe()->only('products'));
            foreach ($stock_products as $product) {
                $sku = Str::random(6);
                while($stock->products()->where('sku', $sku)->exists()) $sku = Str::random(6);

                $stock->products()->create(['sku' => $sku, 'price' => $product['price'], 'qty' => $product['qty']]);
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($stock);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Validator::make(['id' => $id],  ['id' => 'required|numeric|exists:stocks,id'])->validated();
        try {
            $stock = Stock::with('product')->where('id', $data['id'])->first();
            if(!$stock) return $this->fail('Stock not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($stock);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStockRequest $request, $id)
    {
        $data = Validator::make(['id' => $id],  ['id' => 'required|numeric|exists:stocks,id'])->validated();
        try {
            $stock = Stock::find($data['id']);
            if(!$stock) return $this->fail('Stock not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($stock->updated($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Validator::make(['id' => $id],  ['id' => 'required|numeric|exists:stocks,id'])->validated();
        try {
            $stock = Stock::find($data['id']);
            if(!$stock) return $this->fail('Stock not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($stock->delete());
    }

    public function addProduct(AddStockProductRequest $request) {
        $data = $request->validated();
        try {
            $stock = Stock::find($data['id']);
            if(!$stock) return $this->fail('Stock not found', 404);

            $stock->products()->create($data);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($stock);
    }

    public function removeProduct(RemoveStockProductRequest $request) {
        $data = $request->validated();
        try {
            $stock_product = StockProduct::find($data['stock_product_id']);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($stock_product->delete());
    }    
}
