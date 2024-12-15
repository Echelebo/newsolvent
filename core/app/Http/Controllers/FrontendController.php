<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Save;
use App\Models\Settings;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $set = Settings::first();
        $data['title'] = $set->site_desc;
        return view('front.index', $data);
    }

    public function openaccount()
    {
        $set = Settings::first();
        $data['title'] = $set->site_desc;
        return view('front.openaccount', $data);
    }

    public function security()
    {
        $set = Settings::first();
        $data['title'] = $set->site_desc;
        return view('front.security', $data);
    }

    public function personal()
    {
        $data['title'] = "Personal";
        return view('front.personal', $data);
    }

    public function business()
    {
        $data['title'] = "business";
        return view('front.business', $data);
    }

    public function commercial()
    {
        $data['title'] = "commercial";
        return view('front.commercial', $data);
    }

    public function mortgages()
    {
        $data['title'] = "mortgages";
        return view('front.mortgages', $data);
    }

    public function services()
    {
        $data['title'] = "services";
        return view('front.services', $data);
    }

    public function investments()
    {
        $data['title'] = "Investments";
        return view('front.investments', $data);
    }

    public function bankingsustainability()
    {
        $data['title'] = "Banking Sustainability";
        return view('front.bankingsustainability', $data);
    }

    public function mobilepayments()
    {
        $data['title'] = "Mobile Payments";
        return view('front.mobilepayments', $data);
    }

    public function payaglobal()
    {
        $data['title'] = "Paya Global";
        return view('front.payaglobal', $data);
    }

    public function loans()
    {
        $data['title'] = "Loans";
        return view('front.loans', $data);
    }

    public function financialaction()
    {
        $data['title'] = "Financial Action";
        return view('front.financialaction', $data);
    }

    public function insurancesupport()
    {
        $data['title'] = "Insurance Support";
        return view('front.insurancesupport', $data);
    }

    public function cardeligibility()
    {
        $data['title'] = "Card Eligibility";
        return view('front.cardeligibility', $data);
    }

    public function moneytransfers()
    {
        $data['title'] = "Money Transfers";
        return view('front.moneytransfers', $data);
    }

    public function about()
    {
        $data['title'] = "About Us";

        return view('front.about', $data);
    }

    public function faq()
    {
        $data['title'] = "Faq";
        return view('front.faq', $data);
    }

    public function terms()
    {
        $data['title'] = "Terms & conditions";
        return view('front.terms', $data);
    }

    public function privacy()
    {
        $data['title'] = "Privacy policy";
        return view('front.privacy', $data);
    }

    public function contact()
    {
        $data['title'] = "Contact Us";
        return view('front.contact', $data);
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $sav['full_name'] = $request->name;
        $sav['email'] = $request->email;
        $sav['message'] = $request->message;
        $sav['seen'] = 0;
        Contact::create($sav);
        return back()->with('success', ' Message was successfully sent!');
    }

    public function blog()
    {
        $data['title'] = "Blog Feed";
        $data['posts'] = Blog::latest()->paginate(3);
        return view('front.blog', $data);
    }

    public function article($id)
    {
        $post = $data['post'] = Blog::find($id);
        $xcat = $data['xcat'] = Category::find($post->cat_id);
        $post->views += 1;
        $post->save();
        $data['title'] = $data['post']->title;
        return view('front.single', $data);
    }

    public function category($id)
    {
        $cat = Category::find($id);
        $data['title'] = $cat->categories;
        $data['posts'] = Blog::where('cat_id', $id)->latest()->paginate(3);
        return view('front.cat', $data);
    }

    public function page($id)
    {
        $page = $data['page'] = Page::find($id);
        $data['title'] = $page->title;
        return view('front.pages', $data);
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);
        $macCount = Subscriber::where('email', $request->email)->count();
        if ($macCount > 0) {
            return back()->with('alert', 'This Email Already Exist !!');
        } else {
            Subscriber::create($request->all());
            return back()->with('success', ' Subscribe Successfully!');
        }
    }

}
