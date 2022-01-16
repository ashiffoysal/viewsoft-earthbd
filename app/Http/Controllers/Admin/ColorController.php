<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Color;
use Image;
use Auth;


class ColorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    // create
    public function create()
    {
        return view('backend.color.create');
    }
    // store
    public function store(Request $request)
    {
        $validated = $request->validate([
            'color_name' => 'required|unique:colors',
            'color_code' => 'required',
        ]);
        $proname = $request->color;
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $proname);
        $insert = Color::insertGetId([
            'color_name' => $request->color_name,
            'color_slug' => $slug,
            'color_code' => $request->color_code,
            'updated_by' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

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
        $alldata = Color::where('is_deleted', 0)->select(['color_name', 'color_code', 'id', 'is_active'])->orderBy('id', 'DESC')->get();
        return view('backend.color.index', compact('alldata'));
    }
    // active
    public function active($id)
    {
        $active = Color::where('id', $id)->update([
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
        $Deactive = Color::where('id', $id)->update([
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
        $edit = Color::where('id', $id)->select(['id', 'color_name', 'color_code'])->first();
        return view('backend.color.update', compact('edit'));
    }
    // delete
    public function delete($id)
    {
        $delete = Color::where('id', $id)->update([
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
            'color_name' => 'required',
        ]);
        $proname = $request->color;
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $proname);
        $update = Color::where('id', $request->id)->update([
            'color_name' => $request->color_name,
            'color_slug' => $slug,
            'color_code' => $request->color_code,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
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
