<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ContactController extends Controller
{
    public function index($id)
    {
        // $post = \DB::table('post')->where("id",$id)->first();
        $post = Post::where("id",$id)->first();
        if (!$post) 
        {
            abort(404);
        }
        
        $data = [
            "post" => $post
        ];
        return view('contact_us',$data);
    }
}

?>