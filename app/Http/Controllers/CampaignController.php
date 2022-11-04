<?php

namespace App\Http\Controllers;

use App\Ads;
use App\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
{
    public function index()
    {
        $ads = Ads::all();
        return view('dashboard.campaign.ads', compact('ads'));
    }

    public function create($id)
    {
        $ad = Ads::findOrFail($id);
        return view('dashboard.campaign.add-campaign', compact('ad'));
    }

    public function getData(Request $request)
    {
//        return $request;
        $request->validate([
           'objective' => 'required',
           'days' => 'required',
           'budget' => 'required',
           'start_age' => 'required',
           'end_age' => 'required',
           'gender' => 'required',
           'media' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
        $id = $request->ad_id;
        if ($request->hasFile('media')) {
            $image = $request->file('media');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $camp = new Campaign();
            $camp->ads_id = $id;
            $camp->user_id = Auth::id();
            $camp->objective = $request->objective;
            $camp->gender = $request->gender;
            $camp->days = $request->days;
            $camp->budget = $request->budget;
            $camp->start_age = $request->start_age;
            $camp->end_age = $request->end_age;
            $camp->status = 1;
            $camp->media = $input['imagename'];
            $camp->save();
            $request->session()->put('camp', $camp);
            return redirect()->route('user.review', $camp->id);
        }
        $camp = new Campaign();
        $camp->user_id = Auth::id();
        $camp->ads_id = $id;
        $camp->objective = $request->objective;
        $camp->gender = $request->gender;
        $camp->days = $request->days;
        $camp->budget = $request->budget;
        $camp->start_age = $request->start_age;
        $camp->end_age = $request->end_age;
        $camp->status = 1;
        $camp->save();
        $request->session()->put('camp', $camp);
        return redirect()->route('user.review', $camp->id);
    }

    public function review($id)
    {
        $camp = Campaign::findOrFail($id);
        return view('dashboard.campaign.review', compact('camp'));
    }

    public function edit($id)
    {
        $camp = Campaign::findOrFail($id);
        return view('dashboard.campaign.edit-campaign', compact('camp'));
    }

    public function campaigns()
    {
        $camp = Campaign::latest()->paginate(10);
        return view('dashboard.campaign.campaigns', compact('camp'));
    }
}
