<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class PostController extends Controller {
    function showPosts() {
        $posts = DB::select( 'select * from posts ' );
        return view( 'allPost', ['posts'=> $posts] );
    }

    function postDetails( Request $req, $id ) {
        $post = DB::select( 'select * from posts where id = ?', [Crypt::decryptString( $id )] );
        return view( 'post', ['posts'=>$post] );
    }
}
