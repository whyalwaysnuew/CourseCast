
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}">
          <h2 class="brand-name">
            <span class="text-purple">C</span>ourse<span class="text-purple"
              >C</span
            >ast
          </h2>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Program</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mentor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Business</a>
            </li>
          </ul>
          @auth
          {{--  Login  --}}
          <div class="d-flex user-logged nav-item dropdown no-arrow">
            <a href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Halo, {{Auth::user()->name}}!
                @if (Auth::user()->avatar)
                  <img src={{Auth::user()->avatar}} class="user-photo rounded-circle" alt="">
                @else
                  <img src="https://ui-avatars.com/?name=Admin" class="user-photo rounded-circle" alt="">
                @endif
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right:0; left: auto" >
                  <li>
                    <a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
                  </li>
                  @if (Auth::user()->is_admin)
                    <li>
                      <a href="{{route('admin.discount.index')}}" class="dropdown-item">Discount</a>
                    </li>
                  @else
                    <li>
                      <a href="#" class="dropdown-item">Profile</a>
                    </li>
                  @endif
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign out</a>
                    <form action="{{route('logout')}}" method="post" id="logout-form" style="display: none">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                  </li>
                </ul>
            </a>
          </div>

          @else
          {{--  Guest  --}}
          <div class="d-flex">
              <a href="{{route('login')}}" class="btn btn-master btn-secondary me-3">
                Sign In 
              </a>
              <a href="{{route('login')}}" class="btn btn-master btn-primary">
                Sign Up
              </a>
          </div>

          @endauth

        </div>
      </div>
    </nav>

 {{--  Login  --}}
