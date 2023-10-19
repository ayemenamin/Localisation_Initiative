<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index(){
        $news = News::with('user')->get();
        return view('admin.news.index', compact('news'));
    }
    
    public function create(){
        return view('admin.news.create');
    }

    public function store(NewsRequest $request){

        try{
            
            $user = Auth::user(); // Retrieve the authenticated user
            $userId = $user->id;

            $filename = '';
            if($request->hasFile('image')){
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('assets/uploads/news',$filename);
                
            }

            $data = [
                'title_en' => $request->input('title_en'),
                'title_ar' => $request->input('title_ar'),
                'description_en' => $request->input('description_en'),
                'description_ar' => $request->input('description_ar'),
                'date' => $request->input('date'),
                'image' => $filename,
                'add_by' =>  $userId,
            ];

            News::create($data);

            return redirect()->route('news.index')->with(['success' => 'Successfully Insert']);
        }catch(\Exception $ex){
            return redirect()->route('news.index')->with(['error' => 'There Is Error ']);
        
        }

    }

    public function edit($id){
        $news = News::find($id);
        if(! $news){
            return redirect()->route('news.index')->with(['error' => 'Theis New Not Found ']);
        }
       

        return view('admin.news.edit', compact('news'));

    }
    public function update($id,NewsRequest $request){
        try {

            $news = News::find($id);

            if (!$news) {
                return redirect()->route('admin.news.edit', $id)->with(['error' => 'This News Not Exits']);
            }

        
            $news->update($request->except('_token'));
            return redirect()->route('news.index')->with(['success' => 'Update Successfully']);
        } catch (\Exception $ex) {
            return redirect()->route('news.index')->with(['error' => 'There Is Error ']);
        }
    }
}
