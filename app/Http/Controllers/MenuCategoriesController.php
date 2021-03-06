<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use Illuminate\Support\Str;
use App\Models\MenuCategory;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreMenuCategoryRequest;
use App\Http\Requests\UpdateMenuCategoryRequest;

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
            $categories = MenuCategory::with('image')->latest()->get();
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
        $data['slug'] = Str::slug($data['name']);
        if(!$request->hasFile('image')) {
            return $this->fail('Unprocessable Data', 422, ['errors' => ['image' => 'Image is required']]);
        }
    
        try {
            $menu_category = MenuCategory::create($data);
        
            //Upload Category Image
            $resize_data = ['width' => 80, 'height' => 80];
            $res = Helpers::ImageUpload($request->file('image'), public_path('storage'), true, $resize_data);
            if(!$res['status']) $this->fail($res['message'], 500);
            
            $menu_category->image()->create(['url' => $res['url']]);
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
    public function show($slug)
    {
        $data = Validator::make(['slug' => $slug], ['slug' => 'required|string|exists:menu_categories,slug'])->validated();
        try {
            $menu_category = MenuCategory::with('image', 'menu_items')->where('id', $data['id'])->first();
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
    public function update(UpdateMenuCategoryRequest $request, $id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:menu_categories,id'])->validated();
        try {
            $menu_category = MenuCategory::with('image')->where('id', $data['id'])->first();
            if(!$menu_category) return $this->fail('Menu category could not be found', 404);
            
            //check if updating  image t boo
            if($request->hasFile('image')) {
                //Get Image Path
                $image_path = $menu_category->image->url; 
                Storage::disk('public')->delete($image_path);

                Helpers::ImageUpload($request->file('image'), null, true,  ['width' => 80, 'height' => 80], $image_path);
            }
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
            $menu_category = MenuCategory::with('image')->where('id', $data['id'])->first();
            if(!$menu_category) return $this->fail('Menu category could not be found', 404);

            //Delete Corresponding Image
            $image_path = $menu_category->image->url; 
            Storage::disk('public')->delete($image_path);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_category->delete());
    }
}
