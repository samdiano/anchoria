<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landing;
use App\Service;
use App\Slider;
use App\Who;
use App\Leadership;
use App\LeadershipPage;

class PagesController extends Controller
{
    /**
     * Show the company's index page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $landing = Landing::find(1);
        $sliders = Slider::all();
        $services = Service::all();
        return view('index', ['landing' => $landing,'sliders' => $sliders,'services' => $services]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function who()
    {
        $who = Who::find(1);
        return view('who', ['who' => $who]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function leadership()
    {
        $landing = Landing::find(1);
        $leadership = leadershipPage::find(1);
        $leaders = Leadership::orderByRaw('LENGTH(ranking)', 'ASC')->orderBy('ranking', 'ASC')->get();
        return view('leadership', ['landing' => $landing, 'leadership' => $leadership, 'leaders' => $leaders]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function liquidity()
    {
        $landing = Landing::find(1);
        return view('liquidity', ['landing' => $landing]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function multifamily()
    {
        $landing = Landing::find(1);
        return view('multifamily', ['landing' => $landing]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mutual_funds()
    {
        $landing = Landing::find(1);
        return view('mutual_funds', ['landing' => $landing]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolio()
    {
        $landing = Landing::find(1);
        return view('portfolio', ['landing' => $landing]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function research()
    {
        $landing = Landing::find(1);
        return view('research', ['landing' => $landing]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function structured_products()
    {
        $landing = Landing::find(1);
        return view('structured_products', ['landing' => $landing]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faq()
    {
        $landing = Landing::find(1);
        return view('faq', ['landing' => $landing]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function account_opening()
    {
        $landing = Landing::find(1);
        return view('account_opening', ['landing' => $landing]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact_us()
    {
        $landing = Landing::find(1);
        return view('contact_us', ['landing' => $landing]);
    }

}
