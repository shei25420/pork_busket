<?php

namespace App\Http\Controllers;

use App\Models\Allergen;
use Illuminate\Support\Str;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreAllergenRequest;

class AllergensController extends Controller
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
            $allergens = Allergen::latest()->get();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($allergens);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAllergenRequest $request)
    {
        $data = $request->validated();
        try {
            $data['slug'] = Str::slug($data['name']);
            $allergen = Allergen::create($data);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($allergen);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Validator::make(['slug' => $slug], ['slug' => 'required|numeric|exists:allergens,slug'])->validated();
        try {
            $allergen = Allergen::with('menu_items')->where('slug', $data['slug'])->first();
            if(!$allergen) return $this->fail('Allergen not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($allergen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAllergenRequest $request, $id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:allergens,id'])->validated();
        try {
            $allergen = Allergen::find($data['id']);
            if(!$allergen) return $this->fail('Allergen not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($allergen->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:allergens,id'])->validated();
        try {
            $allergen = Allergen::find($data['id']);
            if(!$allergen) return $this->fail('Allergen not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($allergen->delete());
    }
}
