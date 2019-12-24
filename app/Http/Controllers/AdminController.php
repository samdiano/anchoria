<?php

namespace App\Http\Controllers;

use App\Benefit;
use App\BenefitLiquidity;
use App\Contact;
use App\Exports\SubscriberExport;
use App\Faq;
use Illuminate\Http\Request;
use App\Landing;
use App\Slider;
use App\Leadership;
use App\LeadershipPage;
use App\MultiFamily;
use App\Feature;
use App\Liquidity;
use App\MutualFundPage;
use App\Portfolio;
use App\PortfolioService;
use App\Report;
use App\Research;
use App\Service;
use App\StructuredProduct;
use App\Subscriber;
use App\Who;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function slidersEditPost(Request $request, $id)
    {
        $validator = $this->validate($request, [
            'main' => 'required',
            'sub' => 'required',
        ]);
        $slider =  Slider::find($id);
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
            return redirect('admin/landing')->with(['landing' => $landing, 'alert' => ' Slider updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function slidersDelete(Request $request, $id)
    {

        $feature = Slider::find($id);

        if ($feature->delete()) {
            return redirect('admin/landing')->with(['alert' => ' Slider deleted succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
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
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function serviceEditPost(Request $request, $id)
    {
        $validator = $this->validate($request, [
            'name' => 'required',
            'sub' => 'required',
        ]);
        $service =  Service::find($id);
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
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function serviceDelete(Request $request, $id)
    {

        $feature = Service::find($id);

        if ($feature->delete()) {
            return redirect('admin/landing')->with(['alert' => ' Service deleted succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
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
        return view('admin.multifamily.multifamily', ['multifamily' => $multifamily, 'features' => $features]);
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
        return view('admin.portfolio.portfolio', ['portfolio' => $portfolio, 'services' => $services]);
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
        $benefits = BenefitLiquidity::all();
        return view('admin.liquidity.liquidity', ['liquidity' => $liquidity, 'benefits' => $benefits]);
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
    public function benefitLiquidityAddPost(Request $request)
    {
        $validator = $this->validate($request, [
            'benefit' => 'required',
        ]);
        $benefit = new BenefitLiquidity();

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
    public function benefitLiquidityEditPost(Request $request, $id)
    {
        $validator = $this->validate($request, [
            'benefit' => 'required',
        ]);
        $benefit = BenefitLiquidity::find($id);

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
    public function benefitLiquidityDelete(Request $request, $id)
    {

        $benefit = BenefitLiquidity::find($id);

        if ($benefit->delete()) {
            return redirect('admin/liquidity')->with(['alert' => ' Feature deleted succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }



    /**
     * Show the admin who are we page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function structured()
    {
        $liquidity = StructuredProduct::find(1);
        $benefits = Benefit::all();
        return view('admin.structured.structured', ['liquidity' => $liquidity, 'benefits' => $benefits]);
    }

    /**
     * Update service Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function structuredPost(Request $request)
    {
        $validator = $this->validate($request, [
            'main' => 'required',
            'sub' => 'required',
        ]);
        $liquidity = StructuredProduct::find(1);

        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');
            $liquidity->image_path = $filename;
        }

        $liquidity->main = $request->main;
        $liquidity->sub = $request->sub;
        $liquidity->features = $request->features;

        if ($liquidity->save()) {
            return redirect('admin/structured-products')->with(['alert' => ' Content updated succesfully']);
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
            return redirect('admin/structured-products')->with(['alert' => ' Benefit added succesfully']);
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
            return redirect('admin/structured-products')->with(['alert' => ' Benefit updated succesfully']);
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
            return redirect('admin/structured-products')->with(['alert' => ' Benefit deleted succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the admin who are we page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function research()
    {
        $research = Research::find(1);
        $reports = Report::all();
        return view('admin.research.research', ['research' => $research, 'reports' => $reports]);
    }

    /**
     * Update service Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function researchPost(Request $request)
    {
        $validator = $this->validate($request, [
            'main' => 'required',
            'sub' => 'required',
        ]);
        $research = Research::find(1);

        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');
            $research->banner = $filename;
        }

        $research->main = $request->main;
        $research->sub = $request->sub;
        $research->hero_text = $request->hero_text;

        if ($research->save()) {
            return redirect('admin/research')->with(['alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }


    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function reportAddPost(Request $request)
    {
        $validator = $this->validate($request, [
            'title' => 'required',
            'type' => 'required',
            'date' => 'required',
        ]);
        $report = new Report();

        $report->title = $request->title;
        $report->type = $request->type;
        $report->date = $request->date;
        $report->ranking = $request->type;


        if ($report->save()) {
            return redirect('admin/research')->with(['alert' => ' Report added succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function reportEditPost(Request $request, $id)
    {
        $validator = $this->validate($request, [
            'title' => 'required',
            'type' => 'required',
            'date' => 'required',
        ]);
        $report = Report::find($id);

        $report->title = $request->title;
        $report->type = $request->type;
        $report->date = $request->date;
        $report->ranking = $request->type;

        if ($report->save()) {
            return redirect('admin/research')->with(['alert' => ' Report updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function reportDelete(Request $request, $id)
    {

        $report = Report::find($id);

        if ($report->delete()) {
            return redirect('admin/research')->with(['alert' => ' Report deleted succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the admin who are we page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faq()
    {
        $faqs = Faq::all();
        return view('admin.faq.faq', ['faqs' => $faqs]);
    }



    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faqAddPost(Request $request)
    {
        $validator = $this->validate($request, [
            'question' => 'required',
            'response' => 'required',
        ]);
        $faq = new Faq();

        $faq->question = $request->question;
        $faq->response = $request->response;
        $faq->ranking = $request->question;


        if ($faq->save()) {
            return redirect('admin/faq')->with(['alert' => ' FAQ added succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faqEditPost(Request $request, $id)
    {
        $validator = $this->validate($request, [
            'question' => 'required',
            'response' => 'required',
        ]);
        $faq = Faq::find($id);

        $faq->question = $request->question;
        $faq->response = $request->response;


        if ($faq->save()) {
            return redirect('admin/faq')->with(['alert' => ' FAQ updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Update who Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faqDelete(Request $request, $id)
    {

        $faq = Faq::find($id);

        if ($faq->delete()) {
            return redirect('admin/faq')->with(['alert' => ' FAQ deleted succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the admin landing page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        $contact = Contact::find(1);
        return view('admin.contact.contact', ['contact' => $contact]);
    }
    /**
     * Update Landing Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contactPost(Request $request)
    {
        $validator = $this->validate($request, [
            'main' => 'required',
        ]);
        $contact = Contact::find(1);

        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');
            $contact->banner = $filename;
        }

        $contact->main = $request->main;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->phone_2 = $request->phone_2;
        $contact->email = $request->email;
        $contact->email_2 = $request->email_2;
        $contact->email_3 = $request->email_3;

        if ($contact->save()) {
            return redirect('admin/contact')->with(['contact' => $contact, 'alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the admin landing page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mutualFund()
    {
        $mutual = MutualFundPage::find(1);
        return view('admin.mutualfunds.page', ['contact' => $mutual]);
    }
    /**
     * Update Landing Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mutualFundPost(Request $request)
    {
        $validator = $this->validate($request, [
            'main' => 'required',
        ]);
        $contact = MutualFundPage::find(1);

        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');
            $contact->banner = $filename;
        }


        if ($request->hasFile('fixed_income_fund_image')) {
            $filename = $request->fixed_income_fund_image->store('images', 'public');
            $contact->fixed_income_fund_image = $filename;
        }

        if ($request->hasFile('equity_fund_image')) {
            $filename = $request->equity_fund_image->store('images', 'public');
            $contact->equity_fund_image = $filename;
        }

        if ($request->hasFile('money_market_fund_image')) {
            $filename = $request->money_market_fund_image->store('images', 'public');
            $contact->money_market_fund_image = $filename;
        }

        if ($request->hasFile('fixed_income_fund_document')) {
            $filename = $request->fixed_income_fund_document->store('docs', 'public');
            $contact->fixed_income_fund_document = $filename;
        }

        if ($request->hasFile('fixed_income_fund_document_faq')) {
            $filename = $request->fixed_income_fund_document_faq->store('docs', 'public');
            $contact->fixed_income_fund_document_faq = $filename;
        }

        if ($request->hasFile('equity_fund_document')) {
            $filename = $request->equity_fund_document->store('docs', 'public');
            $contact->equity_fund_document = $filename;
        }

        if ($request->hasFile('equity_fund_document_faq')) {
            $filename = $request->equity_fund_document_faq->store('docs', 'public');
            $contact->equity_fund_document_faq = $filename;
        }

        if ($request->hasFile('money_market_fund_document')) {
            $filename = $request->money_market_fund_document->store('docs', 'public');
            $contact->money_market_fund_document = $filename;
        }

        if ($request->hasFile('money_market_fund_document_faq')) {
            $filename = $request->money_market_fund_document_faq->store('docs', 'public');
            $contact->money_market_fund_document_faq = $filename;
        }


        $contact->main = $request->main;
        $contact->sub = $request->sub;
        $contact->email = $request->email;
        $contact->acct_name = $request->acct_name;
        $contact->acct_number = $request->acct_number;
        $contact->bank = $request->bank;
        $contact->fixed_income_fund = $request->fixed_income_fund;
        $contact->equity_fund = $request->equity_fund;
        $contact->money_market_fund = $request->money_market_fund;

        if ($contact->save()) {
            return redirect('admin/mutual-funds')->with(['mutual' => $contact, 'alert' => ' Content updated succesfully']);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    public function export()
    {
        return Excel::download(new SubscriberExport, 'subscribers.csv');
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function subscribers()
    {
        $subscriber = Subscriber::all();
        return view('admin.subscribers.subscribers', ['subscriber' => $subscriber]);
    }


}
