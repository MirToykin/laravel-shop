<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index()
  {
    $products = Product::get();
    return view('index', compact('products'));
  }

  public function categories()
  {
    $categories = Category::get();
    return view('categories', compact('categories'));
  }

  public function category($code = null)
  {
    $category = Category::where('code', $code)->first();
    return view('category', compact('category'));
  }

  public function product($category, $prod)
  {
    return view('product', ['prod' => $prod]);
  }
  public function basket()
  {
    return view('basket');
  }
  public function basketPlace()
  {
    return view('order');
  }
}
