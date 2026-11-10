<nav class="Sidebar">
    <a class="Sidebar-link {{ request()->routeIs('profile') ? 'is-active' : '' }}"
       href="{{ route('profile', ['username' => $username]) }}">Profil</a>
    <a class="Sidebar-link {{ request()->routeIs('dashboard') ? 'is-active' : '' }}"
       href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
    <a class="Sidebar-link {{ request()->routeIs('pengelolaan') ? 'is-active' : '' }}"
       href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan</a>
</nav>