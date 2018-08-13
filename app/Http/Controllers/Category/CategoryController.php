<?php

namespace App\Http\Controllers\Category;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Category;

class CategoryController extends ApiController
{
    public function index(Request $request)
    {
        return Category::with('category')->orderBy('id', 'desc')->paginate(15);
    }

    public function show(Request $request)
    {
        return response()->json(['data' => Category::find($request['category'])]);
    }

    public function store(Request $request)
    {
        $post = Category::create([
            'name' => $request['name'],
            'parent_id' => $request['parent_id'],
            'slug' => $request['name'],
        ]);
        return response()->json(['data' => $post]);
    }

    public function destroy(Request $request)
    {
        $item = Category::find($request['category']);
        $item->destroy($request['category']);
        return response()->json(['data' => $item]);
    }
}
