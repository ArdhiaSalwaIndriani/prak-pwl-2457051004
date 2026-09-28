<nav class="navbar navbar-expand-lg shadow-sm"
     style="background: linear-gradient(135deg, #f783ac, #d63384);">

    <div class="container">

        <a class="navbar-brand text-white fw-bold"
           href="{{ url('/user') }}">

            PWL User
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold"
                       href="{{ url('/user') }}">

                        Daftar User
                    </a>
                </li>

                <li class="nav-item ms-lg-2">
                    <a class="nav-link text-white fw-semibold"
                       href="{{ route('user.create') }}">

                        Tambah User
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>