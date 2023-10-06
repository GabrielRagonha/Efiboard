<header class="header">
    <nav class="navbar">
        <a href="/" class="navbar-home">
            <figure class="navbar-logo-figure">
                <img src="{{ asset('assets/images/logo.png') }}" class="navbar-logo-image" width="186" height="56"
                    alt="Eficaz Logo">
            </figure>
        </a>

        <div class="navbar-settings">
            <input type="checkbox" name="theme" id="theme" class="navbar-toggle" />

            <figure class="navbar-themes">
                <label class="navbar-themes-light" for="theme">
                    <img class="navbar-themes-light-image" src="{{ asset('assets/icons/sun.svg') }}" width="14"
                        height="14" alt="Ícone sol">
                </label>

                <label class="navbar-themes-dark" for="theme">
                    <img class="navbar-themes-dark-image" src="{{ asset('assets/icons/moon.svg') }}" width="14"
                        height="14" alt="Ícone lua">
                </label>
            </figure>


            <button class="navbar-button">
                <figure class="navbar-user-figure">
                    <img src="{{ $userData['profilePicture'] }}" class="navbar-user-image" width="40" height="40"
                        alt="Imagem do usuário">
                </figure>
            </button>
        </div>
    </nav>
</header>
