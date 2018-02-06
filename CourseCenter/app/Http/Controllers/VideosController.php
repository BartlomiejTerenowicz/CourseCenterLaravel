<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateVideoRequest;
use App\Video;

class VideosController extends Controller
{
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
        return view('videos.create');
    }

    /**
     * [store description]
     */
    public function store(CreateVideoRequest $request)
    {
        Video::create($request->all());
        return redirect('videos');
    }
}
