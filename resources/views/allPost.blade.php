<x-app-layout>
    <div class="row" style="margin-right: 0px;">
        <div class="col-md-2">
            <div class="row m-4">
                <ul class="list-group">
                    <li class="list-group-item"><a href="/latest">Latest</a></li>
                    <li class="list-group-item"><a href="/trending">Trending</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <h1 style="margin-left: 15px;">All Posts</h1>
            <hr>
            @foreach ($posts as $post)
            <div class="card post-card" style="max-width: 800px;">
                <div class="row no-gutters">
                    <div class="col-sm-5" style="background: #868e96;">
                        <img src="./assets/images/download.svg" class="card-img-top card-image h-100" alt="...">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->name }}</h5>
                            <p class="card-text">{{ $post->description }}</p>
                            <a href="post/{{ Crypt::encryptString( $post->id ) }}" class="btn view-all">View Post</a>
                        </div>
                        <div class="card-footer">
                            <small >Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <br/>
            {{ $posts->links() }}
        </div>
        <div class="col-md-2">
            <div class="row m-4">
                <h4>Categories</h4>
                <ul class="list-group">
                    <li class="list-group-item">Coming Soon</li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
