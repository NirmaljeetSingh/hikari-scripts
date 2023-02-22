<div class="btn-group custom-drop">
    <button
    class="dropdown-toggle btn-user"
    type="button"
    data-bs-toggle="dropdown"
    aria-expanded="false"
    >
    <i class="las la-user-circle"></i>
    </button>
    <ul class="dropdown-menu">
        @auth
        <li>
        <a href="{{ route('profile.index') }}">Profile</a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        @else
        <li>
            <a href="{{ route('login') }}">Login</a>
        </li>
        <li>
            <a href="{{ route('register') }}">Signup</a>
        </li>
        @endauth
    </ul>
</div>