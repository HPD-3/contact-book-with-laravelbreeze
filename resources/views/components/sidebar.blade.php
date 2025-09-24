<div class="sidebar d-none d-md-flex flex-column p-3">
    <h4 class="mb-4">Aplikasi Daftar Siswa</h4>
    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a href="{{ route('contacts.index') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ route('contacts.create') }}" class="nav-link">➕ Tambah Siswa</a>
        </li>
    </ul>
</div>

<!-- Offcanvas Sidebar (mobile) -->
<div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="mobileSidebar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title"> Aplikasi Daftar Siswa</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ route('contacts.index') }}" class="nav-link text-white"> Home</a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('contacts.create') }}" class="nav-link text-white">➕ Tambah Siswa</a>
            </li>
        </ul>
    </div>
</div>
