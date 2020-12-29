<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Redirect;

class CommentController extends Controller {
    function comment( Request $req ) {
        $comment = new Comment;
        $comment->post_id = Crypt::decryptString( $req->id );
        $comment->user_id = Auth::user()->id;
        $comment->comment = $req->comment;
        $comment->save();
        return redirect()->back();
    }
}
