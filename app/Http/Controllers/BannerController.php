<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return Banner::all();
    }

    public function show($id)
    {
        return Banner::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Banner::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);
        $banner->update($request->all());
        return $banner;
    }

    public function destroy($id)
    {
        return Banner::destroy($id);
    }
}
