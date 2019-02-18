<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    
    <a class="navbar-brand col-sm-3 col-md-2" href="#">ACME corp</a>
    
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <p class="site-name">pHiring</p>
        </li>
        <li class="hello-line navbar-nav">
            Bonjour,
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.querySelector('#logout-form').submit();">
                {{ __('Déconnexion') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
    
</nav>