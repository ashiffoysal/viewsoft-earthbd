<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Brand;
use Image;
use Auth;


class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    // create
    public function create()
    {
        return view('backend.brand.create');
    }
    // store
    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required|unique:brands',
            'image' => 'required',
        ]);
        $proname = $request->brand;
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $proname);
        $insert = Brand::insertGetId([
            'brand' => $request->brand,
            'slug' => $slug,
            'image' => '',
            'updated_by' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'Brand' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/brand/' . $ImageName);
            Brand::where('id', $insert)->update([
                'image' => $ImageName,
            ]);
        }
        if ($insert) {
            $notification = array(
                'messege' => 'Insert success!',
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
    // all slider
    public function index()
    {
        $alldata = Brand::where('is_deleted', 0)->select(['brand', 'image', 'id', 'is_active'])->orderBy('id', 'DESC')->get();
        return view('backend.brand.index', compact('alldata'));
    }
    // active
    public function active($id)
    {
        $active = Brand::where('id', $id)->update([
            'is_active' => 1,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now()->todateTimeString(),
        ]);
        if ($active) {
            $notification = array(
                'messege' => 'Active success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Active Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    // Deactive
    public function deactive($id)
    {
        $Deactive = Brand::where('id', $id)->update([
            'is_active' => 0,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now()->todateTimeString(),
        ]);
        if ($Deactive) {
            $notification = array(
                'messege' => 'Deactive success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Deactive Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    // edit
    public function edit($id)
    {
        $edit = Brand::where('id', $id)->select(['id', 'brand', 'image'])->first();
        return view('backend.brand.update', compact('edit'));
    }
    // delete
    public function delete($id)
    {
        $delete = Brand::where('id', $id)->update([
            'is_deleted' => 1,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        if ($delete) {
            $notification = array(
                'messege' => 'Delete success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Delete Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    // update
    public function update(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required',
        ]);
        $proname = $request->brand;
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $proname);
        $update = Brand::where('id', $request->id)->update([
            'brand' => $request->brand,
            'slug' => $slug,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'Brand' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/brand/' . $ImageName);
            Brand::where('id', $request->id)->update([
                'image' => $ImageName,
            ]);
        }
        if ($update) {
            $notification = array(
                'messege' => 'Update success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Update Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
