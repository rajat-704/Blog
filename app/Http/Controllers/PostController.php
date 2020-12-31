<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class PostController extends Controller {
    function indexPagePosts() {
        $trending = DB::select( 'select * from posts order by view DESC LIMIT 3' );
        $latest = DB::select( 'select * from posts order by view DESC LIMIT 3' );
        // $update = DB::select( 'select * from posts ORDER BY timestamp DESC LIMIT 3' );
        return view( 'dashboard', ['trend' => $trending, 'new'=>$latest] );
    }

    function showPosts() {
        $posts = DB::select( 'select * from posts ' );
        return view( 'allPost', ['posts'=> $posts] );
    }

    function postDetails( Request $req, $id ) {
        $id = Crypt::decryptString( $id );
        $post = DB::select( 'select * from posts where id = ?', [$id] );
        $view = DB::table( 'posts' )->where( 'id', $id )->value( 'view' );
        $view = $view + 1;
        DB::update( 'update posts set view = ? where id = ?', [$view, $id] );
        return view( 'post', ['posts'=>$post] );
    }
}
