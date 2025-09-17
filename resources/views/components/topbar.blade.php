<div class="topbar d-flex justify-content-between align-items-center">
    <!-- Hamburger (mobile) -->
    <button class="btn btn-primary d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
        ☰
    </button>

    <!-- Search bar -->
    <form class="d-flex w-50" method="GET" action="{{ route('contacts.index') }}">
        <input class="form-control me-2" type="search" name="search" placeholder="Search contacts..." value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>

    <div class="dropdown ms-3">
    <button class="btn btn-light dropdown-toggle" type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
        {{ Auth::user()->name }}
    </button>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
        <li>
            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                {{ __('Profile') }}
            </a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item">
                    {{ __('Log Out') }}
                </button>
            </form>
        </li>
    </ul>
</div>


            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

</div>
