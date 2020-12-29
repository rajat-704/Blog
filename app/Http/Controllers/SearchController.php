<?php

namespace App\Http\Controllers;

use App\Models\Post;
use DB;
use Illuminate\Http\Request;

class SearchController extends Controller {
    public function search( Request $request ) {

        if ( $request->ajax() ) {

            $data = DB::table( 'posts' )->where( 'name', 'LIKE', $request->que.'%' )
            ->get();

            $output = '';

            if ( count( $data )>0 ) {

                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';

                foreach ( $data as $row ) {

                    $output .= '<li class="list-group-item">'.$row->name.'</li>';
                }

                $output .= '</ul>';
            } else {

                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }

            return $output;
        } else {
            return '<p> not available </p>';
        }

    }
}
