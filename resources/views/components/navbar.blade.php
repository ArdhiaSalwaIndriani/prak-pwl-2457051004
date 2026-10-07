<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">

        <a class="navbar-brand fw-bold text-primary" href="{{ url('/user') }}">
            Pemrograman Web Lanjut
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link px-lg-3"
                       href="{{ route('user.index') }}">
                        Daftar User
                    </a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-primary px-3 ms-lg-2"
                       href="{{ route('user.create') }}">
                        Tambah User
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>