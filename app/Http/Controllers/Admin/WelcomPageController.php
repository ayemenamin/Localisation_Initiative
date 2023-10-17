<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WelcomRequest;
use App\Models\WelcomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WelcomPageController extends Controller
{
   public function index(){
    $welcomes = WelcomePage::all();
    return view('admin.home.index', compact('welcomes'));
   }

    public function create(){

        return view('admin.home.add');
    }

    public function store(WelcomRequest $request)
    {

        try {

            $welcome  = new WelcomePage();

            $filename = '';
            if($request->hasFile('image')){
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('assets/uploads/home',$filename);
                
            }

            $welcome-> title_en = $request->input('title_en');
            $welcome-> sub_title_en = $request->input('sub_title_en');
            $welcome-> title_ar = $request->input('title_ar');
            $welcome-> sub_title_ar = $request->input('sub_title_ar');
     
            $welcome-> image = $filename;
     
            $welcome->save();

            return redirect()->route('homepage.index')->with(['success' => 'تم حفظ اللغه بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('homepage.index')->with(['error' => 'هناك خطا ما ']);
        }
    }

    public function edit($id){
        $welcome = WelcomePage::find($id);
        return view('admin.home.edit', compact('welcome'));
    }

    public function update($id, WelcomRequest $request){
        try {

            $welcome = WelcomePage::find($id);

            if (!$welcome) {
                return redirect()->route('edit-home', $id)->with(['error' => 'هذه اللغه غير موجوده']);
            }
            if($request->hasFile('image')){

                $path = 'assets/uploads/home/'.$welcome->image;
    
                if(File::exists($path)){
    
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('assets/uploads/home',$filename);
                $welcome-> image = $filename;
            }

            $welcome-> title_en = $request->input('title_en');
            $welcome-> sub_title_en = $request->input('sub_title_en');
            $welcome-> title_ar = $request->input('title_ar');
            $welcome-> sub_title_ar = $request->input('sub_title_ar');
            $welcome->update();
          
            return redirect()->route('homepage.index')->with(['success' => 'تم التحديث  بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('homepage.index')->with(['error' => 'هناك خطا ما ']);
        }
    }

    public function destroy($id){
        $welcome = WelcomePage::find($id);
        if(! $welcome)
        return redirect()->route('homepage.index')->with(['error' => 'غير موجود']);

        if($welcome->image){
            $path = 'assets/uploads/home/'.$welcome->image;

            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $welcome->delete();
        return redirect()->route('homepage.index')->with(['success' => 'تم الحذف  بنجاح']);
    }
}
