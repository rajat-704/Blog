    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand ml-3" href="/dashboard">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline my-2 ml-5 ">
        @csrf
        <div class="form-group">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" id="search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>
        <div class="form-group" id="list"></div>
        </form>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/allPost">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/Profile" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login/Profile {{-- {{ Auth::user()->name }} --}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input class="dropdown-item" type="submit" value="Logout"/>
                        </form>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <script type="text/javascript">
        $(document).ready(function () {
            
            console.log("page ready");
            $('#search').keyup(
                function(){
                    var que = $(this).val();
                    $.get("{{URL::to('search')}}",
                        {'search': que} ,
                        function(data, status){
                            $('#list').html(data);
                        }
                    );
                }
            );
        });
    </script>