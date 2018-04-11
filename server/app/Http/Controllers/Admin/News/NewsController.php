<?php

namespace App\Http\Controllers\Admin\News;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\News;
use App\Http\requests\NewsRequests\CreateNewsRequest;
use App\Http\requests\NewsRequests\UpdateNewsRequest;

class NewsController extends ApiController
{
    public function __construct() {
        $this->middleware('jwt.auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::with('user')->paginate(config('paginate.PAGE_NEWS'));
        return $this->response($news);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewsRequest $request)
    {
        $news=News::create([
            'user_id'=>$this->getUser()->id,
            'title'=>$request->title,
            'state'=>1,
            'content'=>$request->content,
            'image'=>$this->doUpload($request->file('image')),
        ]);
        return $this->response($news);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return $this->response($news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        if ($request->hasFile('image')) {
            if (file_exists(public_path($news->image))) {
                unlink(public_path($news->image));
            }

            $news->image = $this->doUpload($request->file('image'));
            $news->save();
        }
        $news->update([
            'user_id'=>$this->getUser()->id,
            'title'=>$request->title,
            'state'=>1,
            'content'=>$request->content,
        ]);
        return $this->response($news);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if (file_exists(public_path($news->image))) {
            unlink(public_path($news->image));
        }

        $news->delete();
        return $this->response($news);
    }
}
