<?php

namespace App\Http\Controllers;

use App\Benefit;
use Illuminate\Http\Request;
use App\Landing;
use App\Slider;
use App\Leadership;
use App\LeadershipPage;
use App\MultiFamily;
use App\Feature;
use App\Liquidity;
use App\Portfolio;
use App\PortfolioService;
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

    /**
     * Show the admin who are we page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function leadership()
    {
        $leadership = Leadership::orderByRaw('LENGTH(ranking)', 'ASC')->orderBy('ranking', 'ASC')->get();

        $page = LeadershipPage::find(1);
        return view('admin.leadership.leadership', ['leadership' => $leadership, 'lead' => $page]);
    }

    /**
     * Update service Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function leadershipPost(Request $request)
    {
        $validator = $this->validate($request, [
            'main' => 'required',
            'sub' => 'required',
        ]);
        $leadership = LeadershipPage::find(1);

        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');
            $leadership->banner = $filename;
        }
        $leadership->main = $request->main;
        $leadership->sub = $request->sub;
        
        if ($leadership->save()) {
            return redirect('admin/leadership')->with(['alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }


    /**
     * Show the admin who are we page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function leadershipAdd()
    {
        $leadership = Leadership::all();
        $page = LeadershipPage::find(1);
        return view('admin.leadership.new', ['leadership' => $leadership, 'lead' => $page]);
    }

    /**
     * Show the admin who are we page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function leadershipEdit($id)
    {
        $leadership = Leadership::find($id);
        $page = LeadershipPage::find(1);
        return view('admin.leadership.edit', ['leadership' => $leadership, 'lead' => $page]);
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function leadershipAddPost(Request $request)
    {
        $validator = $this->validate($request, [
            'image' => 'required',
            'name' => 'required',
            'role' => 'required',
        ]);
        // $who =  new Who();
        $leadership = new Leadership();

        $info = Leadership::orderByRaw('LENGTH(ranking)', 'ASC')->orderBy('ranking', 'ASC')->get();
        $max_info = 0;
        if (count($info) >= 1) {
            # code...
            $max_info = $info->last()->ranking;
        }

        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');
            $leadership->image_path = $filename;
        }
        $leadership->name = $request->name;
        $leadership->role = $request->role;
        $leadership->description = $request->description;
        $leadership->ranking = $max_info + 1;
        $leadership->linkedin = $request->linkedin;
        
        if ($leadership->save()) {
            return redirect('admin/leadership')->with(['alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function leadershipEditPost(Request $request, $id)
    {
        $validator = $this->validate($request, [
            'name' => 'required',
            'role' => 'required',
        ]);
        // $who =  new Who();
        $leadership = Leadership::find($id);

        // $info = Leadership::orderByRaw('LENGTH(ranking)', 'ASC')->orderBy('ranking', 'ASC')->get();
        // $max_info = 0;
        // if (count($info) >= 1) {
        //     # code...
        //     $max_info = $info->last()->ranking;
        // }


        if ($leadership->rank !== $request->rank) {
            # code...
            $leadership->rank = $request->rank;

            $info = Leadership::orderByRaw('LENGTH(ranking)', 'ASC')->orderBy('ranking', 'ASC')->get();
            foreach ($info as $key => $info) {
                # code...rank
                if ($info->ranking == $request->rank) {
                    # code...
                    $info->rank += 1;
                }
                $info->save();
            }
            $saved = $leadership->save();
    
            $info = Leadership::orderByRaw('LENGTH(ranking)', 'ASC')->orderBy('ranking', 'ASC')->get();
    
            $index = $request->rank;
            // return $request->rank;
            foreach ($info as $key => $info) {
                # code...
                if (($info->rank > $request->rank)) {
                    # code...
                    $index += 1;
                    // return $index;
                    $info->rank = 0;
                    $info->rank = $index;
                }
                $info->save();
            }
        }

        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');
            $leadership->image_path = $filename;
        }
        $leadership->name = $request->name;
        $leadership->role = $request->role;
        $leadership->description = $request->description;
        // $leadership->ranking = $max_info + 1;
        $leadership->linkedin = $request->linkedin;
        
        if ($leadership->save()) {
            return redirect('admin/leadership')->with(['alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function leadershipRankingPost(Request $request, $id)
    {
        $validator = $this->validate($request, [
            'rank' => 'required',
        ]);
        // $who =  new Who();
        $leadership = Leadership::find($id);

        // if ($leadership->rank !== $request->rank) {
            # code...
            $leadership->ranking = $request->rank;

            $info = Leadership::orderByRaw('LENGTH(ranking)', 'ASC')->orderBy('ranking', 'ASC')->get();
            foreach ($info as $key => $info) {
                # code...rank
                if ($info->ranking == $request->rank) {
                    # code...
                    $info->ranking += 1;
                }
                $info->save();
            }
            $saved = $leadership->save();
    
            $info = Leadership::orderByRaw('LENGTH(ranking)', 'ASC')->orderBy('ranking', 'ASC')->get();
    
            $index = $request->rank;
            // return $request->rank;
            foreach ($info as $key => $info) {
                # code...
                if (($info->ranking > $request->rank)) {
                    # code...
                    $index += 1;
                    // return $index;
                    $info->ranking = 0;
                    $info->ranking = $index;
                }
                $info->save();
            }
        // }

        
        if ($saved) {
            return redirect('admin/leadership')->with(['alert' => ' Ranking changed succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the admin who are we page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function multiFamily()
    {
        $multifamily = MultiFamily::find(1);
        $features = Feature::all();
        return view('admin.multifamily.multifamily', [ 'multifamily' => $multifamily, 'features' => $features]);
    }

    /**
     * Update service Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function multiFamilyPost(Request $request)
    {
        $validator = $this->validate($request, [
            'main' => 'required',
            'sub' => 'required',
        ]);
        $multifamily = MultiFamily::find(1);

        if ($request->hasFile('image_1')) {
            $filename = $request->image_1->store('images', 'public');
            $multifamily->image_1 = $filename;
        }
        if ($request->hasFile('image_2')) {
            $filename = $request->image_2->store('images', 'public');
            $multifamily->image_2 = $filename;
        }
        $multifamily->main = $request->main;
        $multifamily->sub = $request->sub;
        $multifamily->side_text = $request->side_text;
        
        if ($multifamily->save()) {
            return redirect('admin/multi-family')->with(['alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function featureAddPost(Request $request)
    {
        $validator = $this->validate($request, [
            'feature' => 'required',
        ]);
        $feature = new Feature();

        $feature->feature = $request->feature;
        
        if ($feature->save()) {
            return redirect('admin/multi-family')->with(['alert' => ' Feature added succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function featureEditPost(Request $request, $id)
    {
        $validator = $this->validate($request, [
            'feature' => 'required',
        ]);
        $feature = Feature::find($id);

        $feature->feature = $request->feature;
        
        if ($feature->save()) {
            return redirect('admin/multi-family')->with(['alert' => ' Feature updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function featureDelete(Request $request, $id)
    {
        
        $feature = Feature::find($id);
        
        if ($feature->delete()) {
            return redirect('admin/multi-family')->with(['alert' => ' Feature deleted succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }


    /**
     * Show the admin who are we page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolio()
    {
        $portfolio = Portfolio::find(1);
        $services = PortfolioService::all();
        return view('admin.portfolio.portfolio', [ 'portfolio' => $portfolio, 'services' => $services]);
    }

    /**
     * Update service Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolioPost(Request $request)
    {
        $validator = $this->validate($request, [
            'main' => 'required',
            'sub' => 'required',
        ]);
        $portfolio = Portfolio::find(1);

        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');
            $portfolio->image_path = $filename;
        }
    
        $portfolio->main = $request->main;
        $portfolio->sub = $request->sub;
        $portfolio->side_text = $request->side_text;
        $portfolio->footer_text = $request->footer_text;
        
        if ($portfolio->save()) {
            return redirect('admin/portfolio')->with(['alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolioServiceAddPost(Request $request)
    {
        $validator = $this->validate($request, [
            'class' => 'required',
            'description' => 'required',
        ]);
        $portfolioService = new PortfolioService();

        $portfolioService->class = $request->class;
        $portfolioService->description = $request->description;
        
        if ($portfolioService->save()) {
            return redirect('admin/portfolio')->with(['alert' => ' Service Class added succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolioServiceEditPost(Request $request, $id)
    {
        $validator = $this->validate($request, [
            'class' => 'required',
            'description' => 'required',
        ]);
        $portfolioService = PortfolioService::find($id);

        $portfolioService->class = $request->class;
        $portfolioService->description = $request->description;
        
        if ($portfolioService->save()) {
            return redirect('admin/portfolio')->with(['alert' => ' Service Class updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolioServiceDelete(Request $request, $id)
    {
        
        $feature = PortfolioService::find($id);
        
        if ($feature->delete()) {
            return redirect('admin/portfolio')->with(['alert' => ' Service Class deleted succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the admin who are we page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function liquidity()
    {
        $liquidity = Liquidity::find(1);
        $benefits = Benefit::all();
        return view('admin.liquidity.liquidity', [ 'liquidity' => $liquidity, 'benefits' => $benefits]);
    }

    /**
     * Update service Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function liquidityPost(Request $request)
    {
        $validator = $this->validate($request, [
            'main' => 'required',
            'sub' => 'required',
        ]);
        $liquidity = Liquidity::find(1);

        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');
            $liquidity->image_path = $filename;
        }
    
        $liquidity->main = $request->main;
        $liquidity->sub = $request->sub;
        $liquidity->features = $request->features;
        
        if ($liquidity->save()) {
            return redirect('admin/liquidity')->with(['alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function benefitAddPost(Request $request)
    {
        $validator = $this->validate($request, [
            'benefit' => 'required',
        ]);
        $benefit = new Benefit();

        $benefit->benefit = $request->benefit;
        
        if ($benefit->save()) {
            return redirect('admin/liquidity')->with(['alert' => ' Benefit added succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function benefitEditPost(Request $request, $id)
    {
        $validator = $this->validate($request, [
            'benefit' => 'required',
        ]);
        $benefit = Benefit::find($id);

        $benefit->benefit = $request->benefit;
        
        if ($benefit->save()) {
            return redirect('admin/liquidity')->with(['alert' => ' Benefit updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function benefitDelete(Request $request, $id)
    {
        
        $benefit = Benefit::find($id);
        
        if ($benefit->delete()) {
            return redirect('admin/liquidity')->with(['alert' => ' Feature deleted succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }




}
