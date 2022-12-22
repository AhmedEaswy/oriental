<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::search('name', true)->orWhere->search('value', true)->search('locale')->orderBy('group_by')->get();
        $headers=Setting::get()->pluck('group_by')->unique()->values()->map(function ($value){ return $value ?? 'others'; })->sortBy('group_by')->toArray();

        return view('admin::settings', compact('settings','headers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Setting $setting
     * @return Response
     */
    public function update(Request $request, Setting $setting)
    {
        // need to check file case
        if ($setting->type == 'file' && $request->hasFile('value')) {
            $setting->update(['value' => uploader($request->file('value'), 'settings')]);
        } else {
            $setting->update($request->validate(Setting::validateUpdate()));
        }
        return back()->withSuccess(' updated ');
    }

    public function forceRefreshCache(Request $request){
        cache()->clear();
        return back()->with('Force Refresh Cache');
    }
}
