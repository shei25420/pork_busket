<?php

namespace App\Http\Controllers;

use App\Models\MealTime;
use Illuminate\Support\Str;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreMealTimeRequest;

class MealTimesController extends Controller
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
            $meal_times = MealTime::latest()->get();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($meal_times);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMealTimeRequest $request)
    {
        $data = $request->validated();
        try {
            $data['slug'] = Str::slug($data['name']);
            $meal_time = MealTime::create($data);            
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($meal_time);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Validator::make(['slug' => $slug], ['slug' => 'required|numeric|exists:meal_times,slug'])->validated();
        try {
            $menu_time = MealTime::where('slug', $data['slug'])->with('menu_items')->first();
            if(!$menu_time) return $this->fail('Meal Time not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_time);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMealTimeRequest $request, $id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:meal_times,id'])->validated();
        try {
            $menu_time = MealTime::where('id', $data['id'])->first();
            if(!$menu_time) return $this->fail('Meal Time not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_time->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Validator::make(['id' => $id], ['id' => 'required|numeric|exists:meal_times,id'])->validated();
        try {
            $menu_time = MealTime::where('id', $data['id'])->first();
            if(!$menu_time) return $this->fail('Meal Time not found', 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($menu_time->delete());
    }
}
