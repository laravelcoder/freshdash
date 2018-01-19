<?php

namespace App\Http\Controllers;

use Config;
use App\Repositories\UserRepository;
use App\Repositories\ProfileRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Analytics;
use Spatie\Analytics\Period;
use App\Libraries\GoogleAnalytics;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;

class HomeController extends Controller
{

    private $userRepository;
    private $profileRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $userRepo, ProfileRepository $profileRepo)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepo;
        $this->profileRepository = $profileRepo;
        view()->share('type', '');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dash()
    {

        // Analytics::getAnalyticsService();
        // $latestuser = User::where('user_id', Auth::id())->latest();
        // $latestuser = User::orderBy('created_at', 'desc')->last();
        $latestuser = User::latest()->first()->created_at;
        $analyticsData = \Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $analyticsData_one = Analytics::fetchTotalVisitorsAndPageViews(Period::days(14));
        $this->data['dates'] = $analyticsData_one->pluck('date');
        $this->data['visitors'] = $analyticsData_one->pluck('visitors');
        $this->data['pageViews'] = $analyticsData_one->pluck('pageViews');
        $this->data['browserjson'] = GoogleAnalytics::topbrowsers();
        $topreferrers = Analytics::fetchTopReferrers(Period::days(7));
        
        // $news = News::where('category_id',$categoryID)->where('id', '>=', 10)->limit(10)->get();
         
        $topref = array_values(array_sort($topreferrers, function($value)
        {
            return $value['url'];
        }));

        // dd($topreferrers->toArray());
         // dd($topreferrers);

        // $twelveMonthsData = Analytics::performQuery(Period::create($yearAgo, $today), 'ga:sessions', ['dimensions' => 'ga:month']);
        // // dd($twelveMonthsData);

        // $sessionsTwelveMonths = collect($twelveMonthsData);
        // dd($twelveMonthsData->rows);

        // $startDate = Carbon::now()->subDays(7)->startOfWeek();
        // $endDate = Carbon::now();
        // https://github.com/spatie/laravel-analytics/issues/42
        // https://github.com/spatie/laravel-analytics/issues/148
        // https://github.com/search?q=fetchVisitorsAndPageViews&type=Code&utf8=%E2%9C%93
        // $this->data['last_weeks_vists'] = Analytics::fetchVisitorsAndPageViews(Period::create($startDate,$endDate))->groupBy('date')->lists('visitors');

        // $startDate = Carbon::now()->startOfWeek();
        // $endDate = Carbon::now()->endOfWeek();
        // $this->data['this_weeks_vists'] = Analytics::fetchVisitorsAndPageViews(Period::create($startDate,$endDate))->groupBy('date')->lists('visitors');


        /* $analyticsData_two = Analytics::fetchVisitorsAndPageViews(Period::days(14)); */
        /* $this->data['two_dates'] = $analyticsData_two->pluck('date'); */
        /* $this->data['two_visitors'] = $analyticsData_two->pluck('visitors')->count(); */
        /* $this->data['two_pageTitle'] = $analyticsData_two->pluck('pageTitle')->count(); */

        /* $analyticsData_three = Analytics::fetchMostVisitedPages(Period::days(14)); */
        /* $this->data['three_url'] = $analyticsData_three->pluck('url'); */
        /* $this->data['three_pageTitle'] = $analyticsData_three->pluck('pageTitle'); */
        /* $this->data['three_pageViews'] = $analyticsData_three->pluck('pageViews'); */

        $analyticsData_mvp = Analytics::fetchMostVisitedPages(Period::days(14));
        $this->data['url'] = $analyticsData_mvp->pluck('url');
        $this->data['pageTitle '] = $analyticsData_mvp->pluck('pageTitle');
        $this->data['pageViews'] = $analyticsData_mvp->pluck('pageViews');

        $this->data['browserjson'] = GoogleAnalytics::topbrowsers();

        $result = GoogleAnalytics::country();
        $this->data['country'] = $result->pluck('country');
        $this->data['country_sessions'] = $result->pluck('sessions');

        // $today = Carbon\Carbon::now()->format('Y-m-d').'%';
        // dd($latestuser);
        $updated = date('g:i A m-d-Y ');
        $userwidgettitle = 'Users';
        $users = User::count();
        $getusertoday = User::where('created_at', '>=', date('Y-m-d H:i:s',strtotime('-7 days')) )->count();

        // dd($this->data);

        return view('partials.dashboard', compact('userwidgettitle','users', 'updated','latestuser','getusertoday','analyticsData', 'topreferrers', 'andata', 'topref'), $this->data);
    }



    public function salesdash()
    {
        return view('partials.sales-dashboard');
    }

    public function marketingdash()
    {
        return view('partials.marketing-dashboard');
    }

    public function socialdash()
    {
        return view('partials.social-dashboard');
    }

    public function anadash()
    {
        return view('partials.analytical-dashboard');
    }

    public function pages()
    {
        return view('partials/pages/*');
    }

}
