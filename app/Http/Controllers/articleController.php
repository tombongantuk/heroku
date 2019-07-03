<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use App\User;
use App\Image;
use Illuminate\Support\Facades\Storage;
use DB,Log,Session;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            $article=Article::with('comment','image','user')->where('title','like',
            '%'.$request->search.'%')->orderBy('created_at','desc')->paginate(4);
            $view=(String)view('article_list')->with('article',$article)->render();
            return response()->json(['view'=>$view,'status','success']);
        }
        $article=Article::with('comment','image','user')->orderBy('created_at','desc')->paginate(4);
        return view('article.index')->with('article',$article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create($request->all());
        
        $image = new Image();;

        // if user choose a file, replace the old one // 
        if($request->hasFile('file')){
            $file = $request->file('file'); 
            $destination_path = 'uploads/'; 
            $filename = str_random(6).'_'.$file->getClientOriginalName(); 
            if(!$file->move($destination_path, $filename)){ 
                return 'error on moving file';
            }
            Storage::delete(public_path($image->file));
            $image->file = $destination_path.$filename;
            $image->save();
        }
        // replace old data with new data from the submitted form // 
        $image->file = $request->input('file'); 
        $image->description = $request->input('description'); 
        $image->save();
        return redirect()->route('article.index');
        //dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $article=Article::find($id);
        $comment=Article::find($id)->comments->sortBy('comments.create_at');
        $image=($article->image)? $article->image->file:'';
        return view('article.show')->with('articles',$article)->with('comments',$comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Article::find($id);
        return view('article.edit')->with('articles',$article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Article::find($id)->update($request->all());
        
        $image = Image::find($id); // if user choose a file, replace the old one //
        if( $request->hasFile('file')){
            $file = $request->file('file'); 
            $destination_path = 'uploads/'; 
            $filename = str_random(6).'_'.$file->getClientOriginalName(); 
            if(!$file->move($destination_path, $filename)){ 
                $image->file = $destination_path . $filename;
            } 
            Storage::delete(public_path($image->file));
            $image->save();
        }
        // replace old data with new data from the submitted form // 
        $image->file = $request->input('file'); 
        $image->description = $request->input('description');
        $image->save();

        return redirect()->route('article.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        $image=Image::where('article_id',$id)->first();
        Storage::delete($image); 
        return redirect()->route('article.index');
    }
}
