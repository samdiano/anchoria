<?php

namespace App\Http\Controllers;

use App\Benefit;
use App\BenefitLiquidity;
use App\Faq;
use App\Feature;
use Illuminate\Http\Request;
use App\Landing;
use App\Service;
use App\Slider;
use App\Who;
use App\Leadership;
use App\LeadershipPage;
use App\Liquidity;
use App\MultiFamily;
use App\Portfolio;
use App\PortfolioService;
use App\Report;
use App\Research;
use App\StructuredProduct;

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
        $liquidity = Liquidity::find(1);
        $benefits = BenefitLiquidity::all();
        return view('liquidity', ['liquidity' => $liquidity, 'benefits' => $benefits]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function multifamily()
    {
        $multifamily = MultiFamily::find(1);
        $features = Feature::all();
        return view('multifamily', ['multifamily' => $multifamily, 'features' => $features]);
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
        $portfolio = Portfolio::find(1);
        $services = PortfolioService::all();
        return view('portfolio', ['portfolio' => $portfolio, 'services' => $services]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function research()
    {
        $research = Research::find(1);
        $reports = Report::all();
        return view('research', ['reports' => $reports, 'research' => $research]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function structured_products()
    {
        $structured = StructuredProduct::find(1);
        $benefits = Benefit::all();

        return view('structured_products', ['structured' => $structured, 'benefits' => $benefits]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faq()
    {
        $faqs = Faq::all();
        return view('faq', ['faqs' => $faqs]);
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
