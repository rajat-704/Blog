<x-app-layout>
    <div class="row" style="margin-right: 0px;">
        <div class="jumbotron">
            <div class="row banner-heading d-flex justify-content-center align-item-center">
                <h1>Welcome To Our Blog</h1><br />
            </div>
            <div class="row banner-heading-2 ml-2 d-flex justify-content-center text-center">
                <h3>
                    Hope You Will Enjoy
                </h3>
            </div> 
        </div>
        <div class="container-fluid trending">
            <div class="row ">
                <div class="col-8 col-sm-10">
                    <h1>Trending</h1>
                </div>
                <div class="col-1 col-sn-2 view"><a href="/trending">
                    <button class="btn view-all" >View All</button></a>
                </div>
            </div>
            <div class="row">
            @foreach ($trend as $post)
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card" style="width: 100%;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->name}}</h5>
                            <p class="card-text">{{$post->description}}</p>
                            <a href="post/{{ Crypt::encryptString( $post->id ) }}" class="btn btn-primary">Visit</a>
                        </div>
                        <div class="card-footer">
                           <small >Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            @endforeach
            </div> 
        </div>
        <div class="container-fluid latest">
            <div class="row ">
                <div class="col-8 col-sm-10">
                    <h1>Latest</h1>
                </div>
                <div class="col-1 col-sn-2 view"><a href="/latest">
                    <button class="btn view-all" >View All</button></a>
                </div>
            </div>
            <div class="row">
            @foreach ($new as $post)
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card" style="width: 100%;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->name}}</h5>
                            <p class="card-text">{{$post->description}}</p>
                            <a href="post/{{ Crypt::encryptString( $post->id ) }}" class="btn btn-primary">Visit</a>
                        </div>
                        <div class="card-footer">
                           <small >Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            @endforeach 
            </div> 
        </div>
    </div>
</x-app-layout>
