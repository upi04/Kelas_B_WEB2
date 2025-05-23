<header style="display: flex; justify-content: space-between; align-items: center; padding: 10px 30px; background-color: #fff; border-bottom: 2px solid #eee;">

    <!-- Slot untuk gambar/logo dari halaman -->
    <div>
        @yield('header-image')
    </div>

    <!-- Navigasi -->
    <nav style="display: flex; gap: 30px;">
        <a href="{{ url('/') }}" style="color: red; text-decoration: none; font-weight: bold;">HOME</a>
        <a href="{{ url('/projects') }}" style="color: red; text-decoration: none; font-weight: bold;">PROJECT</a>
        <a href="{{ url('/skill') }}" style="color: red; text-decoration: none; font-weight: bold;">SKILL</a>
        <a href="{{ url('/about_rizqi') }}" style="color: red; text-decoration: none; font-weight: bold;">ABOUT</a>
        <a href="{{ url('/contact') }}" style="color: red; text-decoration: none; font-weight: bold;">CONTACT</a>
    </nav>

</header>
