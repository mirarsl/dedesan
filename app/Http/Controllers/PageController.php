<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Message;
use App\Page;
use App\Plan;
use App\Project;
use App\Service;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class PageController extends Controller
{
    function index($slug)
    {
        $Page = Page::where('slug', $slug)->first();
        if (empty($Page))
            abort(404);


        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOTools::setCanonical(url()->full());
        SEOMeta::addKeyword(explode(',', $Page->meta_tags));
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setUrl(url()->full());
        SEOTools::opengraph()->addImage(url(asset($Page->image)));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::twitter()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->addImage(url(asset($Page->image)));

        return view("pages.template", compact("Page"));
    }

    function detail(Request $request)
    {
        $route_name = \Route::currentRouteName();
        $route_name = str_replace('-', '_', $route_name);
        if (method_exists($this, $route_name)) {
            $Re = $this->$route_name($request->slug);
            $Page = $Re["Page"];
            $Meta = $Re["Meta"];
            $Other = $Re["Other"];
            $View = $Re["View"] ?? null;
        }
        if (empty($Page) || empty($Meta))
            abort(404);


        SEOTools::setTitle($Page->meta_title ?? $Page->title);
        SEOTools::setDescription($Page->meta_desc);
        SEOMeta::addKeyword(explode(',', $Page->meta_tags));
        SEOTools::setCanonical(url()->full());
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setUrl(url()->full());
        SEOTools::opengraph()->addImage(url(asset($Page->image)));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('locale', 'tr');
        SEOTools::twitter()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->setTitle(SEOTools::getTitle());
        SEOTools::jsonLd()->addImage(url(asset($Page->image)));
        return view("pages.details", compact("Page", "Meta", "Other", 'View'));
    }

    function project($slug)
    {
        $Meta = Page::where('slug', 'projeler')->first();
        $Product = Project::where("slug", $slug)->active()->first();
        $Others = Project::where("slug", '!=', $slug)->order()->active()->limit(4, 0)->get();
        return ['Page' => $Product, 'Other' => $Others, 'Meta' => $Meta, 'View' => 'project-details'];

    }
    function recipe($slug)
    {
        $Meta = Page::where('slug', 'recipes')->first();
        $Plan = Plan::where("slug", $slug)->active()->first();
        $Others = Plan::where("slug", '!=', $slug)->order()->active()->limit(4, 0)->get();
        return ['Page' => $Plan, 'Other' => $Others, 'Meta' => $Meta, 'Route' => 'recipe', 'View' => 'recipe-details'];
    }

    function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "type" => "required",
                "json.*" => "required",
            ],
            [
                "json.*.required" => "This field is required.",
            ]
        );
        if ($validator->fails()) {
            return redirect()->to(url()->previous())->with('dialog', '1')->with('status', 'error')->with('message', 'Please check all form fields')->withErrors($validator)->withInput(request()->all());
        }

        $validated = $validator->validate();

        if ($request->hasFile('json.file')) {
            $file = $request->file('json.file');
            $fileLocation = Storage::disk('public')->put('hr/', $file);
            $validated['json']['file'] = $fileLocation;
        }

        $Store = new Message();
        $Store->type = $validated['type'];
        $Store->json = json_encode($validated['json']);




        if ($Store->save()) {
            if (setting('site.mail') !== null) {
                // SMTP Ayarları
                Mail::send('mail.default', $validated, function ($msg) use ($validated) {
                    $msg->from(env('MAIL_USERNAME'), setting('site.title'));
                    $msg->to(setting('site.mail'), setting('site.title'));
                    $msg->subject($validated['type']);
                });
            }


            return redirect()->to(url()->previous())->with('dialog', '1')->with('status', 'success')->with('message', 'Your message has been delivered successfully.');
        } else {
            return redirect()->to(url()->previous())->with('dialog', '1')->with('status', 'error')->with('message', 'An error occurred while transmitting your message. Please try again later.');
        }

    }

    function sitemap()
    {
        $Page = Page::all()->except(1);
        $Projects = Project::active()->get();
        $Plans = Plan::active()->get();
        $News = Blog::active()->get();

        $content = view('sitemap.index', compact('Page', 'Projects','Plans','News'));
        return response($content)->header('Content-Type', 'application/xml');
    }
}
