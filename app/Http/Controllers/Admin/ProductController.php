<?php

namespace App\Http\Controllers\Admin;

use Image;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Color;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //index
    public function index()
    {
        $alldata = Product::where('is_active', 1)->where('is_deleted', 0)
            ->select(['product_name', 'product_sku', 'id', 'image', 'product_price', 'is_active', 'category_id', 'subcategory_id', 'subcategory_id'])
            ->with('Category', 'SubCategory', 'ReSubCategory')->orderBy('id', 'DESC')->get();
        //dd($alldata);
        return view('backend.product.index', compact('alldata'));
    }

    // create
    public function create()
    {
        $allCategory = Category::where('is_active', 1)->where('is_deleted', 0)->select(['name', 'id'])->get();
        $allBrand = Brand::where('is_active', 1)->where('is_deleted', 0)->select(['brand', 'id'])->get();
        $allColor = Color::where('is_active', 1)->where('is_deleted', 0)->select(['color_name', 'id'])->get();
        return view('backend.product.create', compact('allCategory', 'allBrand', 'allColor'));
    }

    //store
    public function store(Request $request)
    {

        $validated = $request->validate([
            'product_name' => 'required',
            'product_sku' => 'required ',
            'product_price' => 'required',
            'product_qty' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            //'resubcategory_id' => 'required',
            'product_description' => 'required',
            'product_img' => 'required',
        ]);

        $proname = $request->product_name;
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $proname);

        $insert = Product::insertGetId([
            'product_name' => $request->product_name,
            'product_sku' =>  $request->product_sku,
            'product_slug' => $slug,
            'product_price' => $request->product_price,
            'product_qty' => $request->product_qty,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'resubcategory_id' => $request->resubcategory_id,
            'brand_id' =>  $request->brand_id,
            'product_size' => json_encode($request->product_size),
            'color_id' => json_encode($request->color_id),
            'tags' => json_encode($request->tags),
            'is_active' =>  $request->is_active,
            'product_description' => $request->product_description,
            'image' => '',
            'gallery_img' => '',
            'is_deleted' => 0,
            'created_by' => Auth::user()->id . '-' . Auth::user()->name,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if ($request->hasFile('product_img')) {
            $image = $request->file('product_img');
            $ImageName = 'Product' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/product/' . $ImageName);
            Product::where('id', $insert)->update([
                'image' => $ImageName,
            ]);
        }
        $photos = array();
        if ($request->hasFile('images')) {

            foreach ($request->images  as  $key => $photo) {

                $photoName = uniqid() . "." . $photo->getClientOriginalExtension();
                $resizedPhoto = Image::make($photo)->save('uploads/product/gallary/' . $photoName);

                array_push($photos, $photoName);
            }
            Product::where('id', $insert)->update([
                'gallery_img' => json_encode($photos),
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
