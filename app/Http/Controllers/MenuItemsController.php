<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Models\MenuItem;
use Illuminate\Support\Str;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreMenuItemRequest;

class MenuItemsController extends Controller
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
            $menu_items = MenuItem::with('image', 'category')->latest()->get();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuItemRequest $request)
    {
        $data = $request->validated();
        if(!$request->hasFile('image')) return $this->fail('unprocessable entity', 422, ['errors' => ['image' => ['Image is required']]]);

        if($data['store_product_id']) $data['trackable'] = true;
        try {
            $slug = Str::slug($data['name']);
            while(MenuItem::where('slug', $slug)->exists()) $slug = Str::slug($slug);
            $data['slug'] = $slug;

            $menu_item = MenuItem::create($data);

            //Upload Menu Item image
            $resize_data = ['width' => 200, 'height' => 200];
            $res = Helpers::ImageUpload($request->file('image'), public_path('storage'), true, $resize_data);
            if(!$res['status']) $this->fail($res['message'], 500);
            
            $menu_item->image()->create(['url' => $res['url']]);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return  $this->success($menu_item);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:menu_items,id'])->validated();
        try {
            $menu_item = MenuItem::with('image')->where('id', $data['id'])->first();
            if(!$menu_item) return $this->fail('Menu item not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }

        return $this->success($menu_item);
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
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:menu_items,id'])->validated();
        try {
            $menu_item = MenuItem::with('image')->where('id', $data['id'])->first();
            if(!$menu_item) return $this->fail('Menu item not found', 404);
     
            //check if updating  image t boo
            if($request->hasFile('image')) {
                //Get Image Path
                $image_path = $menu_item->image->url; 
                Storage::disk('public')->delete($image_path);

                Helpers::ImageUpload($request->file('image'), null, true,  ['width' => 80, 'height' => 80], $image_path);
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }

        return $this->success($menu_item);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:menu_items,id'])->validated();
        try {
            $menu_item = MenuItem::with('image')->where('id', $data['id'])->first();
            if(!$menu_item) return $this->fail('Menu item not found', 404);

            //Delete Menu Item Image
            $image_path = $menu_item->image->url; 
            Storage::disk('public')->delete($image_path);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }

        return $this->success($menu_item);
    }
}
