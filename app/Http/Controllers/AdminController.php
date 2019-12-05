<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landing;
use App\Slider;
use App\Service;
use App\Who;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the admin landing page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landing()
    {
        $landing = Landing::find(1);
        $sliders = Slider::all();
        $services = Service::all();
        return view('admin.landing.index', ['landing' => $landing, 'sliders' => $sliders, 'services' => $services]);
    }
    /**
     * Update Landing Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landingPost(Request $request)
    {
        $validator = $this->validate($request, [
            'hero' => 'required',
            'services' => 'required',
        ]);
        $landing = Landing::find(1);
        $landing->hero = $request->hero;
        $landing->services = $request->services;
    
        if ($landing->save()) {
            return redirect('admin/landing')->with(['landing' => $landing, 'alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }
    /**
     * Show the admin landing page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sliders()
    {
        $landing = Landing::find(1);
        return view('admin.landing.slider', ['landing' => $landing]);
    }
    /**
     * Update Landing Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function slidersPost(Request $request)
    {
        $validator = $this->validate($request, [
            'main' => 'required',
            'sub' => 'required',
        ]);
        $slider =  new Slider();
        $landing = Landing::find(1);

        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');
            $slider->image_path = $filename;
        }
        $slider->main = $request->main;
        $slider->sub = $request->sub;
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;
    
        if ($slider->save()) {
            return redirect('admin/landing')->with(['landing' => $landing, 'alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the admin service page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function service()
    {
        $landing = Landing::find(1);
        return view('admin.landing.service', ['landing' => $landing]);
    }
    /**
     * Update service Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function servicePost(Request $request)
    {
        $validator = $this->validate($request, [
            'name' => 'required',
            'sub' => 'required',
        ]);
        $service =  new Service();
        $landing = Landing::find(1);

        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');
            $service->image_path = $filename;
        }
        $service->name = $request->name;
        $service->description = $request->sub;
        $service->sub_text = $request->sub;
        
        if ($service->save()) {
            return redirect('admin/landing')->with(['landing' => $landing, 'alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the admin who are we page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function who()
    {
        $who = Who::find(1);
        return view('admin.who.who', ['who' => $who]);
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function whoPost(Request $request)
    {
        $validator = $this->validate($request, [
            'hero' => 'required',
            'side_text' => 'required',
            'quote' => 'required',
            'vision' => 'required',
            'mission' => 'required',
            'integrity' => 'required',
            'client_focus' => 'required',
            'leadership' => 'required',
            'collaboration' => 'required',
        ]);
        // $who =  new Who();
        $who = Who::find(1);

        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');
            $who->image_path = $filename;
        }
        $who->hero = $request->hero;
        $who->side_text = $request->side_text;
        $who->quote = $request->quote;
        $who->vision = $request->vision;
        $who->mission = $request->mission;
        $who->integrity = $request->integrity;
        $who->client_focus = $request->client_focus;
        $who->leadership = $request->leadership;
        $who->collaboration = $request->collaboration;
        
        if ($who->save()) {
            return redirect('admin/who')->with(['alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }
}
