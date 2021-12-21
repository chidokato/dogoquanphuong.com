<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\themes;
use App\category;
use App\menu;
use App\setting;
use App\articles;
use App\home;
use App\slider;
use App\images;
use App\district;
use App\mausac;
use App\size;
use Mail;

class c_frontend extends Controller
{
    function __construct()
    {
        $logo = themes::where('note','logo')->first();
        $logo_trang = themes::where('note','logo âm bản')->first();
        $head_setting = setting::where('id',1)->first();
        $cat_pro = menu::where('classify','Product menu')->where('status','true')->where('parent', 0)->orderBy('view','asc')->get();
        $menu_top = menu::where('classify','Menu top')->where('status','true')->where('parent', 0)->orderBy('view','asc')->get();
        $menu_product = menu::where('classify','Product menu')->where('status','true')->where('parent', 0)->orderBy('view','asc')->get();
        
        view()->share( [
            'logo'=>$logo,
            'logo_trang'=>$logo_trang,
            'head_setting'=>$head_setting,
            'cat_pro'=>$cat_pro,
            'menu_top'=>$menu_top,
            'menu_product'=>$menu_product,
        ]);
    }

    public function home()
    {
        $active = '';
        $slider = themes::where('note','Slider')->get();
        $category_home = category::where('sort_by','1')->where('home','true')->get();
        $articles_new = articles::where('sort_by','1')->where('status','true')->orderBy('id','desc')->paginate(6);
        return view('pages.home',[
            'active'=>$active,
            'slider'=>$slider,
            'category_home' => $category_home,
            'articles_new' => $articles_new,
        ]);
    }

    public function sitemap()
    {
        $sitemap_category = category::where('status','true')->get();
        $sitemap_product = product::where('status','true')->where('id',24)->get();
        $sitemap_news = news::where('status','true')->get();
        return response()->view('pages.sitemap', [
            'sitemap_category' => $sitemap_category,
            'sitemap_product' => $sitemap_product,
            'sitemap_news' => $sitemap_news
            ])->header('Content-Type', 'text/xml');
    }

    public function wishlist()
    {
        // $category = category::where('slug',$curl)->first();
        return view('pages.wishlist');
    }
    public function myaccount()
    {
        // $category = category::where('slug',$curl)->first();
        return view('pages.myaccount');
    }
    public function cart()
    {
        // $category = category::where('slug',$curl)->first();
        return view('pages.cart');
    }

    public function category($curl)
    {
        $active = $curl;
        $category = category::where('slug',$curl)->first();
        // if ($curl=='gioi-thieu') { $active = 'gioi-thieu'; return view('pages.about',['category'=>$category, 'active'=>$active]); }
        // if ($curl=='lien-he') { $active = 'lien-he'; return view('pages.contact',['category'=>$category, 'active'=>$active]); }
        
        $cates = category::where('parent', $category["id"])->get();
        $cat_array = [$category["id"]];
        $cat_sku_array = [$category["sku"]];
        foreach ($cates as $cate) {
            $cat_array[] = $cate->id;
            $cat_sku_array[] = $cate->sku;
            $cate1s = category::where('parent', $cate->id)->get();
            foreach ($cate1s as $cate1) {
                $cat_array[] = $cate1->id;
                $cat_sku_array[] = $cate1->sku;
            }
        }

        if ($category['sort_by'] == 1) {
            $id_pro_array = [];
            foreach($cat_array as $key => $cat_id){
                $articles = articles::where('category_id', $cat_id)->orwhere('category_sku','like',"%$cat_sku_array[$key]%")->get();
                foreach($articles as $article){
                    $id_pro_array[] = $article->id;
                }
            }
            $new_id_pro_array = array_unique($id_pro_array);
            // dd($new_id_pro_array);
            $articles = articles::where('status','true')->whereIn('id',$new_id_pro_array)->orderBy('id','desc')->paginate(9);
            return view('pages.product',['category'=>$category, 'product'=>$articles, 'active'=>$active]);
        }

        if ($category['sort_by'] == 2) {
            $articles = articles::where('status','true')->whereIn('category_id',$cat_array)->orderBy('id','desc')->paginate(15);
            return view('pages.news',['category'=>$category, 'articles'=>$articles, 'active'=>$active]);
        }

        if ($category['sort_by'] == 3) {
            return view('pages.singlepage',['category'=>$category, 'active'=>$active]);
        }
        
    }

    public function articles($curl,$arurl)
    {
        $articles = articles::where('slug',$arurl)->first();
        
        $id = $articles['id'];
        $articles->hits = $articles->hits + 1;
        $articles->save();

        $lienquan = articles::where('status','true')
            ->where('category_id',$articles->category_id)
            ->whereNotin('id',[$id])
            ->take(6)
            ->get();
        if ($articles->sort_by==1) {
            return view('pages.articles',[
                'articles'=>$articles,
                'lienquan'=>$lienquan
            ]);
        }elseif($articles->sort_by==2){
            return view('pages.articlesnews',[
                'articles'=>$articles,
                'lienquan'=>$lienquan
            ]);
        }
        
    }

    public function post_search(Request $Request)
    {
        $articles = articles::orderBy('id','desc')->where('id','!=' , 0);
        if($Request->mebe){
            $articles->where('category_sku','like',"%$Request->mebe%");
        }
        // if($Request->mebe){
        //     $articles->where('name','like',"%$Request->name%");
        // }
        // if($Request->ngay1 && $Request->ngay2){
        //     $product->whereBetween('ngayketthuc', array($Request->ngay1, $Request->ngay2));
        // }
        $articles = $articles->paginate(30);
        return view('pages.home',[
            'articles'=>$articles,
        ]);
    }

    public function searchnews(Request $Request)
    {
        $key = $Request->key;
        $news = news::where('status','true')->where('name','like',"%$key%")->orderBy('id','desc')->paginate(24);
        return view('pages.search',['news'=>$news, 'key'=>$key]);
    }

    

    public function singlenews($curl,$nurl,$id)
    {
        $singlenews = news::where('id',$id)->first();
        $tinlienquan = news::where('status','true')->where('cat_id',$singlenews['cat_id'])->whereNotin('id',[$id])->take(10)->get();
        return view('pages.singlenews',['singlenews'=>$singlenews, 'tinlienquan'=>$tinlienquan]);
    }

	public function dangky(Request $Request)
    {
        $head_setting = setting::where('id',1)->first();
        $mail = $head_setting['email'];
		$this->validate($Request,['phone' => 'Required'],[] );
        $name = $Request->name;
        $phone = $Request->phone;
        $email = $Request->email;
        $link = $Request->link;
        $content = $Request->content;
		$date = date('m/d/Y h:i:s', time());
        
        Mail::send('email_feedback', array('name'=>$name,'phone'=>$phone,'email'=>$email,'link'=>$link,'content'=>$content,'date'=>$date) , function($message) use ($mail){
            $message->from($mail, 'hado.charmvillas.org');
            $message->to($mail, 'hado.charmvillas.org')->subject('Thông tin khách hàng');
        });
        //return view('pages.camon')->with('Alerts','Gửi thành công');
		return redirect('/')->with('Alerts','Thành công');
    }

}



