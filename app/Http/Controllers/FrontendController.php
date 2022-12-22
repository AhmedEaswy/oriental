<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function contact()
    {
        return view('frontend::contact');
    }

    public function switch_lang(Request $request)
    {
        $local = $request->get('local',config('app.locale'));
        if (in_array($local, locals())) {
            session()->put('local',$local);
            app()->setLocale($local);
        }
        return back();
    }

    public function contactStore(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email:filter'],
            'name' => ['required', 'string', 'min:3'],
            'content' => ['required', 'string', 'min:3'],
            'phone' => ['required', 'string', 'min:3'],
            'phone_code' => ['required', 'string'],
            'interest' => ['required', 'string'],
        ]);
//        dd($validated);
        Contact::create($validated);
        return back()->with(['success' => 'contact soon as soon']);
    }



    public function home()
    {
        $projects = Project::get();
        return view('frontend::index', compact('projects', ));
    }

}
