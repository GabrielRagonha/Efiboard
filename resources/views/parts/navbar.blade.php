<header class="header">
    <nav class="navbar">
        <a href="/" class="navbar-home">
            <figure class="navbar-logo-figure">
                <img src="{{ asset('assets/images/logo.png') }}" class="navbar-logo-image" width="186" height="56" alt="Eficaz Logo">
            </figure>
        </a>
    
        <input type="checkbox" name="theme" id="navbar-theme" class="navbar-theme" />
    
        <button class="navbar-button">
            <figure class="navbar-user-figure">
                <img src="{{$userData['profilePicture']}}" class="navbar-user-image" width="40" height="40" alt="Imagem do usuário">
            </figure>
        </button>
    </nav>
</header>