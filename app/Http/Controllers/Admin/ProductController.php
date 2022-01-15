<?php

namespace App\Http\Controllers\Admin;

use Image;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\ResubCategory;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //index
    public function index()
    {
        $alldata = Product::select(['product_name', 'product_sku', 'id'])->orderBy('id', 'DESC')->get();
        return view('backend.product.index', compact('alldata'));
    }

    // create
    public function create()
    {
        $allCategory = Category::where('is_active', 1)->where('is_deleted', 0)->select(['name', 'id'])->get();
        $allBrand = Category::where('is_active', 1)->where('is_deleted', 0)->select(['name', 'id'])->get();
        return view('backend.product.create', compact('allCategory'));
    }

    //store
    public function store(Request $request)
    {

        dd($request->all());

        // $validated = $request->validate([
        //     'product_name' => 'required',
        //     'product_sku' => 'required',
        //     'product_qty' => 'required',
        //     'product_price' => 'required',
        //     'product_size' => 'required',
        //     'product_brand' => 'required',
        //     'category' => 'required',
        //     'sub_category' => 'required',
        //     're_sub_category' => 'required',
        //     // 'product_description' => 'required',
        //     'product_image' => 'required',
        //     //  'product_gallery_image' => 'required',
        // ]);
        $insert = Product::insertGetId([
            'product_name' => $request->product_name,
            'product_sku' =>  $request->product_sku,
            'product_qty' => $request->product_qty,
            'product_price' => $request->product_price,
            'product_size' => $request->product_size,
            'product_brand' =>  $request->product_brand,
            'category' =>  $request->category,
            'sub_category' =>  $request->sub_category,
            're_sub_category' =>  $request->re_sub_category,
            'product_description' => $request->product_description,
            'product_image' => '',
            // 'product_gallery_image' => '',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $ImageName = 'Product' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/product/' . $ImageName);
            Product::where('id', $insert)->update([
                'product_image' => $ImageName,
            ]);
        }
        if ($insert) {
            $notification = array(
                'messege' => 'insert success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'insert Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
