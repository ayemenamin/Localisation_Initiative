  <!-- Nav Bar Start -->
  <div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="index.html" class="navbar-brand">Helpz</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="index.html" class="nav-item nav-link active">{{__('messages.home')}}</a>
                <a href="about.html" class="nav-item nav-link">{{__('messages.ab')}}</a>
                <a href="causes.html" class="nav-item nav-link">Causes</a>
                <a href="event.html" class="nav-item nav-link">Events</a>
                <a href="blog.html" class="nav-item nav-link">Blog</a>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
       
                    <a rel="alternate" class="nav-item nav-link" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
             
            @endforeach
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu">
                        <a href="single.html" class="dropdown-item">Detail Page</a>
                        <a href="service.html" class="dropdown-item">What We Do</a>
                        <a href="team.html" class="dropdown-item">Meet The Team</a>
                        <a href="donate.html" class="dropdown-item">Donate Now</a>
                        <a href="volunteer.html" class="dropdown-item">Become A Volunteer</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                
                @guest
                @if (Route::has('login'))
                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                @endif
                @else
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> {{ Auth::user()->name }}</a>
                    <div class="dropdown-menu">
                        <a href="single.html" class="dropdown-item">My Profil</a>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                       
                       
                    </div>
                </div>
                @endguest
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->