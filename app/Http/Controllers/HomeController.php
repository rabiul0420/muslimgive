<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use PDF;
use App\Models\Registration;
use App\Models\Trainers;
use App\Models\Training;
use App\Models\ProductsType;
use App\Models\ServiceType;
use App\Models\Products;
use App\Models\Service;
use App\Models\Video;
use App\Models\Application;
use App\User;
use App\Mail\Contact_success;
use App\Models\JobsCategory;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Mail\Email_varification;
use Str;
use View;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = DB::table('slider')->where(['status'=>'Active','category_id'=>1])->orderBy('id','desc')->get();
        $training = Training::where(['status'=>'Active'])->orderBy('id','desc')->limit(6)->get();
        $job_category = JobsCategory::orderBy('id','desc')->get();
        return view('home',(['sliders'=>$sliders,'training'=>$training,'job_category'=>$job_category]));
    }

    public function product($title)
    {
        $type= ProductsType::where('link','product/'.$title)->first();
        $product = Products::where(['product_type_id'=>$type->id,'status'=>'Active'])->orderBy('id')->get();
        return view('product',(['type'=>$type,'product'=>$product,'type_id'=>$type->id]));
    }

    public function service($title)
    {
        $type= ServiceType::where('link','service/'.$title)->first();
        $service = Service::where(['service_type_id'=>$type->id,'status'=>'Active'])->orderBy('id')->get();
        return view('service',(['type'=>$type,'service'=>$service,'type_id'=>$type->id]));
    }

    public function training($title)
    {
        $trainings= Training::where('status','Active')->get();
        $training = Training::where(['link'=>'training/'.$title,'status'=>'Active'])->orderBy('id')->first();
        return view('training',(['trainings'=>$trainings,'training'=>$training]));
    }

    public function application_submit(Request $request)
    {
        $allData=$request->all();

        Application::create($allData);

        echo 'success';
    }



    public function activate($id)
    {
        $user=User::where('id',$id)->first();
        $user->status='Active';
        $user->save();
        Session::flash('message', 'Your account activate successfully');
        return redirect('login');
    }



    public function contact_us_send(Request $request)
    {
        $allData=$request->all();

        $admin_mail = DB::table('settings')->where('key','site_email')->value('value');
        $company_name = DB::table('settings')->where('key','site_title')->value('value');

        Mail::to($request->email)->send(new Contact_success($allData,$admin_mail,$company_name));
        echo 'success';
    }

    public function news_detail($id)
    {
        $news_detail = DB::table('news')->where('id',$id)->first();
        return view('news_detail',(['news_detail'=>$news_detail]));
    }

    public function service_detail($id)
    {
        $service_detail = DB::table('services')->where('id',$id)->first();
        return view('service_detail',(['service_detail'=>$service_detail]));
    }





                          /* all page template*/
    public function pages(Request $request,$slug)
    {
        $page_id = DB::table('pages')->where('slug',$slug)->value('id');

        if(!$page_id){
            abort('404');
        }

        $page = DB::table('pages')->where('id',$page_id)->first();


        if($page->template=='trainers'){
           $trainers = Trainers::where('status','Active')->get();
            View::share('trainers', $trainers);
        }

        if($page->template=='training'){
            $training = Training::where('status','Active')->get();
            View::share('training', $training);
        }

        if($page->template=='video'){
            $video = Video::where('status','Active')->get();
            View::share('video', $video);
        }

        return view($page->template,(['page'=>$page]));
    }




    public function registration(Request $request){
        $registration = $request->session()->get('registration');
        return view('auth.register',['registration'=>$registration]);
    }


    public function registration_submit(Request $request)
    {
        $registration_data = $request->all();



        $validator = Validator::make($request->all(), [
            'email' => ['required','unique:users,email'],
        ]);

        if ($validator->fails()){
            session()->flash('message',$validator->errors()->first());
            return redirect('register')->withInput();
        }

        if ($request->hasFile('personal_file')){
            $registration_data['personal_file']=$request->file('personal_file')->store('files');
        }

        if(empty($request->session()->get('registration'))){
            $registration = new User();
            $registration->fill($registration_data);
            $request->session()->put('registration', $registration);
        }else{
            $registration = $request->session()->get('registration');
            $registration->fill($registration_data);
            $request->session()->put('registration', $registration);
        }

        return redirect('registration-second');
    }


    public function registration_second(Request $request)
    {
        return view('auth.registration_second');
    }



    public function registration_final_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()){
            session()->flash('message',$validator->errors()->first());
            return back()->withInput();
        }

                    $registration = $request->session()->get('registration');


                    $user = User::create([
                        'name' => $registration->name,
                        'phone' => $registration->phone,
                        'email' => $registration->email,
                        'password' => bcrypt($request->password),
                        'status' => 'Pending',
                        'national_id_card' => $request->national_id_card,
                    ]);

                    $admin_mail = DB::table('settings')->where('key','site_email')->value('value');
                    $company_name = DB::table('settings')->where('key','site_title')->value('value');

                    Mail::to($registration->email)->send(new Email_varification($user,$admin_mail,$company_name));

                    $request->session()->forget('registration');

                    return redirect('registration-success');




    }











}
