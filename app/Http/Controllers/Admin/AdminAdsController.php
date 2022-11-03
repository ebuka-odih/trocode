<?php

namespace App\Http\Controllers\Admin;

use App\Ads;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAdsController extends Controller
{
    public function index()
    {
        $ads = Ads::all();
        return view('admin.ads', compact('ads'));
    }

    public function create()
    {
        return view('admin.create-ad');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $news = new Ads();
            $news->name = $request->name;
            $news->description = $request->description;
            $news->image = $input['imagename'];
            $news->save();
            return redirect()->back();
        }
        $news = new Ads();
        $news->name = $request->name;
        $news->description = $request->description;
        $news->save();
        return redirect()->back();
    }
}
