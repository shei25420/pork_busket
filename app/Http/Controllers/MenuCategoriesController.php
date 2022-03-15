<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreMenuCategoryRequest;

class MenuCategoriesController extends Controller
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
            $categories = MenuCategory::all();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuCategoryRequest $request)
    {
        $data = $request->validated();
        try {
            $menu_category = MenuCategory::create($data);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_category);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:menu_categories,id'])->validated();
        try {
            $menu_category = MenuCategory::find($data['id']);
            if(!$menu_category) return $this->fail('Menu category could not be found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMenuCategoryRequest $request, $id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:menu_categories,id'])->validated();
        try {
            $menu_category = MenuCategory::find($data['id']);
            if(!$menu_category) return $this->fail('Menu category could not be found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_category->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:menu_categories,id'])->validated();
        try {
            $menu_category = MenuCategory::find($data['id']);
            if(!$menu_category) return $this->fail('Menu category could not be found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_category->delete());
    }
}
