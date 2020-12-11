<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Team;
use App\Banner;
use App\Client;
use App\Product;
use App\Project;
use App\Mail\FreeConsulting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicViewController extends Controller
{
    /**
     * Display WELCOME PAGE
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $banners= Banner::all();
        $teams= Team::all();
        $clients = Client::orderByRaw('RAND()')->take(8)->get();
        return view('welcome',with([
                'banners' =>$banners,
                'projects'  => $this->helperFunction()->get('projects'),
                'futureProjects'=> $this->helperFunction()->get('futureProjects'),
                'products' => $this->helperFunction()->get('products'),
                'randomProducts' => $this->helperFunction()->get('randomProducts'),
                'teams' => $teams,
                'clients' => $clients
            ])
        );
    }
     /**
     * Display BLOGS
     *
     * @return \Illuminate\Http\Response
     */
    public function blogs()
    {
        $blogs= Blog::paginate(6);
        //dd($blogs);
        return view('blog',with([
                'blogs' =>$blogs,
                'projects'  => $this->helperFunction()->get('projects'),
                'futureProjects'=> $this->helperFunction()->get('futureProjects'),
                'products' => $this->helperFunction()->get('products')
            ])
        );
    }

     /**
     * Display contact
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact',with([
                'projects'  => $this->helperFunction()->get('projects'),
                'futureProjects'=> $this->helperFunction()->get('futureProjects'),
                'products' => $this->helperFunction()->get('products')
            ])
        );
    }
    /**
     * Free Consult
     *
     * @return \Illuminate\Http\Response
     */
    public function freeConsult(Request $request)
    {
        $this->validate($request,[
            'name' =>'required | string', 
            'email' =>'required | email',
            'subject' => 'required | string',
            'message' => 'required | string | max:1000 ',
        ]);

        Mail::to('admin@admin.com')->send(new FreeConsulting($request));
        return \redirect()->back()->with('success',"Mail sent successfully");
    }

     /**
     * Display PARTICULAR BLOG
     *
     * @return \Illuminate\Http\Response
     */
    public function singleBlog($id)
    {
        $blog= Blog::findOrFail($id);
        return view('singleBlog',with([
                'blog'     => $blog,
                'projects'   => $this->helperFunction()->get('projects'),
                'futureProjects' => $this->helperFunction()->get('futureProjects'),
                'products' => $this->helperFunction()->get('products')
            ])
        );
    }

     /**
     * Display BLOGS
     *
     * @return \Illuminate\Http\Response
     */
    public function singleProject($id)
    {
        $project= Project::findOrFail($id);
        //dd($blogs);
        return view('singleProject',with([
                'project' =>$project,
                'projects'  => $this->helperFunction()->get('projects'),
                'futureProjects'=> $this->helperFunction()->get('futureProjects'),
                'products' => $this->helperFunction()->get('products')
            ])
        );
    }

     /**
     * Display BLOGS
     *
     * @return \Illuminate\Http\Response
     */
    public function singleProduct($id)
    {
        $product= Product::findOrFail($id);
        //dd($blogs);
        return view('singleProduct',with([
                'product' =>$product,
                'projects'  => $this->helperFunction()->get('projects'),
                'futureProjects'=> $this->helperFunction()->get('futureProjects'),
                'products' => $this->helperFunction()->get('products')
            ])
        );
    }
    /**
     * Display WELCOME PAGE
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $banners= Banner::all();
        $teams= Team::orderByRaw('RAND()')->take(4)->get();
        $clients = Client::orderByRaw('RAND()')->take(8)->get();
        return view('aboutUs',with([
                'banners' =>$banners,
                'projects'  => $this->helperFunction()->get('projects'),
                'futureProjects'=> $this->helperFunction()->get('futureProjects'),
                'products' => $this->helperFunction()->get('products'),
                // 'randomProducts' => $this->helperFunction()->get('randomProducts'),
                'teams' => $teams,
            ])
        );
    }

      /**
     * Display TEAMS
     *
     * @return \Illuminate\Http\Response
     */
    public function teams()
    {
        $teams= Team::paginate(10);
        //dd($blogs);
        return view('teams',with([
                'teams' =>$teams,
                'projects'  => $this->helperFunction()->get('projects'),
                'futureProjects'=> $this->helperFunction()->get('futureProjects'),
                'products' => $this->helperFunction()->get('products')
            ])
        );
    }
    /**
     * Helper Function / Common Function
     *
     * @return \Illuminate\Http\Response
     */
    private function helperFunction()
    {
        $projects= Project::where('progress','!=','Future')->where('status','Active')->get();
        $futureProjects= Project::where('progress','Future')->where('status','Active')->get();
        $products = Product::all();
        $randomProducts = Product::get()->random(2);
        return collect([
            'projects' => $projects,
            'futureProjects' =>$futureProjects,
            'products' => $products,
            'randomProducts' =>$randomProducts
        ]);
    }
}
