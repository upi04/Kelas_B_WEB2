<header style="display: flex; justify-content: space-between; align-items: center; padding: 10px 30px; background-color: #fff; border-bottom: 2px solid #eee;">

    <!-- Slot untuk gambar/logo dari halaman -->
    <div>
        @yield('header-image')
    </div>

    <!-- Navigasi -->
    <nav style="display: flex; gap: 30px;">
        <a href="{{ url('/') }}">HOME</a>
        <a href="{{ url('/biodata') }}">BIODATA</a>
        <a href="{{ url('/projects') }}">PROJECT</a>
        <a href="{{ url('/skill') }}">SKILL</a>
        <a href="{{ url('/about_rizqi') }}">ABOUT</a>
        <a href="{{ url('/contact') }}">CONTACT</a>
    </nav>

</header>

<style>
    nav a {
        color: red;
        text-decoration: none;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    nav a:hover {
        background-color: red;
        color: white;
        cursor: pointer;
    }
</style>
