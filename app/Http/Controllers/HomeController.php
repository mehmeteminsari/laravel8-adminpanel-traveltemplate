<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{

    public static function categorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }


     public function index()
    {
        $setting = Setting::first();
        $slider=Product::select('id','title','image','description','city')->limit(4)->get();
        $daily =Product::select('id','title','image','description','city')->limit(6)->inRandomOrder()->get();
        $last = Product::select('id','title','image','description','city')->limit(6)->orderByDesc('id')->get();
        $picked =Product::select('id','title','image','description','city')->limit(6)->inRandomOrder()->get();
        #print_r($daily);
        #exit();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked,

            'page'=>'home'
        ];

        return view('home.index',$data);
        //return view('home.index',['setting'=>$setting]);

    }
    public static function getsetting(){
        return Setting::first();
    }
    public static function countreview($id)
    {
        return Review::where('product_id',$id)->count();
    }

    public static function avrgreview($id)
    {
        return Review::where('product_id',$id)->average('rate');
    }

    public function aboutus()
    {
        return view('home.aboutus');
    }

    public function product($id,$city)
    {
        $data=Product::find($id);
        $datalist = Image::where('product_id',$id)->get();
        $reviews=Review::where('product_id',$id)->get();

        //print_r($data);
        //exit();
        return view('home.product_detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }

    public function getproduct(Request $request)
    {
        $search =$request->input('search');

        $count= Product::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data =Product::where('title',$request->input('search'))->first();
            return redirect()->route('product',['id'=>$data->id,'city'=>$data->title]);
        }
        else
        {
            return redirect()->route('productlist',['search'=>$search]);
        }

    }

    public function productlist($search)
    {
        $datalist= Product::where('title','like','%'.$search.'%')->get();
        return view('home.search_products',['search'=>$search,'datlist'=>$datalist]);
    }

    public function addtocart($id)
    {
        echo "ADD To Cart <br>";
        $data=Product::find($id);
        print_r($data);
        exit();
    }

    public function categoryproducts($id,$city)
    {
        $datalist = Product::where('category_id',$id)->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view('home.category_products',['data'=>$data,'datalist'=>$datalist]);
    }

    public function about()
    {
        $setting = Setting::first();
        //return view('home.about');
        return view('home.about',['setting'=>$setting]);
    }
    public function userprofile()
    {
        return view('home.user_profile');
    }

    public function references()
    {
        $setting = Setting::first();
        //return view('home.references');
        return view('home.references',['setting'=>$setting]);
    }

    public function faq()
    {
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
        //return view('home.aboutus');
    }
    public function sendmessage(Request $request)
    {
        $data=new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->note = $request->input('note');

        $data->save();
        return redirect()->route('contact')->with('info','success','Mesajiniz basariyla kayit edildi.');
    }

    public function test($id,$name)
    {
        echo "id number:", $id;
        echo "<br>id Name:", $name;
    }
    public function login()
    {
        return view('admin.login');

    }

    public function logincheck(Request $request)
    {

        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}




