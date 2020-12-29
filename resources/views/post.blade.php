<x-app-layout>
    <div class="row" style="margin-right: 0px;">
        <div class="col-md-2">
        </div>
        <div class="col-md-8" style="border: 10px; padding: 2%;">
            @foreach ($posts as $post)
            <h1>{{ $post->name }}</h1>
            <p>
                {{ $post->description}}
            </p>
            <br /><br />
            @endforeach
            <form method="post" action="comment">
                @csrf
                <input type="hidden" name="id" value="{{ Crypt::encryptString( $post->id ) }}"> 
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea class="form-control" id="coment" name="comment" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <ul class="list-group m-3">
                <li class="list-group-item m-1">Cras justo odio</li>
                <li class="list-group-item m-1">Dapibus ac facilisis in</li>
                <li class="list-group-item m-1">Morbi leo risus</li>
                <li class="list-group-item m-1">Porta ac consectetur ac</li>
                <li class="list-group-item m-1">Vestibulum at eros</li>
            </ul>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</x-app-layout>
