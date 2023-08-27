<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{

    public function daftar()
    {
        $data = Link::all();
        return view('pages.saveLink', compact('data'));
    }


    public function create(Request $request)
    {
        $link = $request->link;

        if (str_contains($link, 'youtube.com')) {
            $shortLink = substr($link, 0, 43);
            $embedLink = str_replace("/watch?v=", "/embed/", $shortLink);
            $link = $embedLink;
        }

        $link = Link::create([
            'note' => $request->note,
            'link' => $link,
        ]);
        
        return redirect()->route('daftar');
    }

    public function delete($id)
    {
        $data = Link::find($id);
        $data->delete();

        if (str_contains($data, 'youtube.com')) {
        return redirect()->route('youtubeView');
        }

        return redirect()->route('daftar');
    }

    public function youtube()
    {

        $data = Link::where('link', 'LIKE', '%youtube.com%')->get();

        return view('pages.youtubeView', compact('data'));

    }

    
}
