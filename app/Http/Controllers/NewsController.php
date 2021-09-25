<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    protected $news;
    public function __construct(NewsRepository $news)
	{
		$this->news = $news;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();
        $categories = Category::get();
        return view("news.index", compact("news", "categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $news = new News();

        $news->title = $request->title;
        $avatar = Str::slug($request->title, '-');
        $imageName =$avatar. '.'. $request->picture->extension();
        $request->picture->move(public_path("pictures"), $imageName);
        $news->title = $request->title;
        $news->category_id = $request->category_id;
        $news->desc = $request->desc;
        $news->image = $imageName;
        $news->save();

        return back()->with('success',"News add scucessfully !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::findOrFail($id);
        dd($new);
        return view('news.update', compact('new'));
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
        $this->validate($request, [
            'picture' =>'required',
        ]);

        $news = News::find($id);
        $avatar = Str::slug($request->title, '-');
        $imageName =$avatar. '.'. $request->picture->extension();
        $request->picture->move(public_path("pictures"), $imageName);

        $news->update([
            'title' => $request->title,
            'desc'=>$request->desc,
            'image' => $request->picture,
        ]);

        return back()->with("success", "News updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);

        return back()->with('success',"News deteted scucessfully !");
    }
}
