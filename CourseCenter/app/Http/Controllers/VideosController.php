<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateVideoRequest;
use App\Video;
use App\Category;
use Auth;

class VideosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => 'index']);
    }

    /**
     * Get videos from databases
     * @return Video - list of videos
     */
    public function index()
    {
        $videos = Video::latest()->get();
        return view('videos.index',compact('videos'));
    }

    /**
     * Method returns one movie
     */
    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view('videos.show')->with('video',$video);
    }

    /**
     * Create new Video and add to database
     */
    public function create()
    {
        $categories = Category::pluck('name','id')->all();
        return view('videos.create')->with('categories',$categories);
    }

    /**
     * [store description]
     */
    public function store(CreateVideoRequest $request)
    {
        $video = new Video($request->all());
        Auth::user()->videos()->save($video);
        $categoryIdentity = $request->input('CategoryList');
        $video->categories()->attach($categoryIdentity);
        return redirect('videos');
    }

    /**
     * Form for edit videos
     * @return [type] [description]
     */
    public function edit($id)
    {
        $categories = Category::pluck('name','id')->all();
        $video = Video::findOrFail($id);
        return view('videos.edit',compact('video','categories'));
    }

    /**
     * Update video
     * @return [type] [description]
     */
    public function update($id, CreateVideoRequest $request)
    {
        $video = Video::findOrFail($id);
        $video->update($request->all());
        $video->categories()->sync($request->input('CategoryListB'));
        return redirect('videos');
    }
}
