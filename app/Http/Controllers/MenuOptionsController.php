<?php

namespace App\Http\Controllers;

use App\Models\MenuOption;
use Illuminate\Support\Str;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreMenuItemRequest;
use App\Http\Requests\StoreMenuOptionRequest;

class MenuOptionsController extends Controller
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
            $menu_options = MenuOption::latest()->all();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_options);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuOptionRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        try {
            $menu_option = MenuOption::create($data);
            
            $options = explode(',', $data['options']);
            foreach ($options as $option) {
                $data = explode('|', $option);
                $menu_option->options()->create(['name' => $data[0], 'price' => $data[1]]);
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_option);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Validator::make(['slug' => $slug], ['slug' => 'required|string|exists:menu_options,slug'])->validated();
        try {
            $menu_option = MenuOption::where('slug', $slug)->with('options')->first();
            if(!$menu_option) return $this->fail('Menu option not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_option);
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
        // return $this->success();
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
            $menu_option = MenuOption::find($id);
            if(!$menu_option) return $this->fail('Menu option not found', 404);

            $menu_option->options()->delete();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_option->delete());
    }
}
