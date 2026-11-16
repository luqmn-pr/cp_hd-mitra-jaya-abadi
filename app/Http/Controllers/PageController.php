<?php

namespace App\Http\Controllers;

use App\Models\HomepageSection;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display the homepage.
     */
    public function home(): View
    {
        $settings = SiteSetting::first();
        $sections = HomepageSection::orderBy('sort_order')->get()->keyBy('section_key');
        $services = Service::where('is_active', true)->with('features')->orderBy('sort_order')->get();
        $allPortfolios = Portfolio::published()
            ->with(['service', 'images'])
            ->orderBy('sort_order')
            ->get();
        $featuredPortfolios = $allPortfolios->where('is_featured', true)->take(6);
        $partners = Partner::where('is_active', true)->orderBy('sort_order')->get();

        return view('home', compact(
            'settings',
            'sections',
            'services',
            'allPortfolios',
            'featuredPortfolios',
            'partners',
        ));
    }

    /**
     * Display the services listing page.
     */
    public function services(): View
    {
        $settings = SiteSetting::first();
        $services = Service::where('is_active', true)->with('features')->orderBy('sort_order')->get();

        return view('services', compact('settings', 'services'));
    }

    /**
     * Display a service detail page.
     */
    public function serviceDetail(string $slug): View
    {
        $settings = SiteSetting::first();
        $service = Service::where('slug', $slug)
            ->where('is_active', true)
            ->with('features')
            ->firstOrFail();

        $portfolios = Portfolio::published()
            ->where('service_id', $service->id)
            ->with(['service', 'images'])
            ->orderBy('sort_order')
            ->get();

        $otherProducts = $service->getOtherProductExamples();
        $relatedPortfolios = $portfolios;

        return view('service-detail', compact('settings', 'service', 'portfolios', 'otherProducts', 'relatedPortfolios'));
    }

    /**
     * Display the portfolio listing page.
     */
    public function portfolio(Request $request): View
    {
        $settings = SiteSetting::first();
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();

        $query = Portfolio::published()
            ->with(['service', 'images'])
            ->orderBy('sort_order');

        $activeServiceSlug = $request->query('kategori');
        if (! empty($activeServiceSlug)) {
            $service = Service::where('slug', $activeServiceSlug)->first();
            if ($service) {
                $query->where('service_id', $service->id);
            }
        }

        $portfolios = $query->paginate(9)->withQueryString();

        return view('portfolio', compact('settings', 'services', 'portfolios', 'activeServiceSlug'));
    }

    /**
     * Display a portfolio detail page.
     */
    public function portfolioDetail(string $slug): View
    {
        $settings = SiteSetting::first();
        $portfolio = Portfolio::published()
            ->where('slug', $slug)
            ->with(['service', 'images'])
            ->firstOrFail();

        $relatedPortfolios = Portfolio::published()
            ->where('service_id', $portfolio->service_id)
            ->where('id', '!=', $portfolio->id)
            ->limit(3)
            ->get();

        return view('portfolio-detail', compact('settings', 'portfolio', 'relatedPortfolios'));
    }

    /**
     * Display the about page.
     */
    public function about(): View
    {
        $settings = SiteSetting::first();
        $partners = Partner::where('is_active', true)->orderBy('sort_order')->get();

        return view('about', compact('settings', 'partners'));
    }
}
