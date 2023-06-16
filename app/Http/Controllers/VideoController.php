<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        $data['videos'] = $videos;
        return view('pages.home.index', $data);
    }

    public function store(Request $request)
    {
        $videoName = Str::slug($request->title, '_').'.'.$request->file('video')->getClientOriginalExtension();
        $video = new Video();
        $video->title = $request->title;
        $video->description = $request->description;
        $video->file_video = $videoName;
        $video->save();


        Storage::putFileAs('video', $request->file('video'), $videoName);

        return redirect()->back()->with('success', 'Video Berhasil Disimpan!');

    }

    public function update(Request $request)
    {
        $content = [
            'title' => $request->title,
            'description' => $request->description
        ];

        if($request->file('video')){
            //delete old file
            $video = Video::where('id', '=', $request->id)->first();
            Storage::delete('video/'.$video->file_video);
            //store new file
            $videoName = Str::slug($request->title, '_').'.'.$request->file('video')->getClientOriginalExtension();
            Storage::putFileAs('video', $request->file('video'), $videoName);

            $content['file_video'] = $videoName;
        }

        Video::query()->where('id', '=', $request->id)->update($content);

        return redirect()->back()->with('success', 'Video Berhasil Diubah!');
    }

    public function delete(Request $request)
    {
        $video = Video::where('id', '=', $request->id)->first();
        Storage::delete('video/'.$video->file_video);
        Video::where('id', '=', $request->id)->delete();

        return redirect()->back()->with('success', 'Video Berhasil Dihapus!');;
    }
}
