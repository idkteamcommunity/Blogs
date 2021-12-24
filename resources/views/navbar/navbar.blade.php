<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        @include('navbar.offcanvas')
        <a class="navbar-brand d-flex align-items-center ms-2 me-md-auto" href="#">
            <img src="Assets/logo.svg" alt="blogs logo" width="40" class="d-inline-block align-text-top">
            <span class="my-logo ms-2">IDK</span>
        </a>
        <div class="collapse navbar-collapse d-none d-lg-flex ms-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/"><i
                            class="bi bi-house-door-fill"></i>
                        Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts"><i
                            class="bi bi-blockquote-left"></i> Blogs</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $active === 'category' ? 'active' : '' }}" href="/category"
                        id="category" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-x-diamond-fill"></i> Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="category">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <form class="d-none d-sm-flex" action="/posts">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Temukan postingan">
                <button class="btn btn-idk px-4 py-2" type="submit" id="button-addon2"><i
                        class="bi bi-search"></i></button>
            </div>
        </form>
        <button class="btn btn-idk px-4 py-2 d-flex d-sm-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="bi bi-search"></i>
        </button>
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <a class="offcanvasTopLabel navbar-brand d-flex align-items-center ms-2 me-md-auto" href="#">
                    <img src="Assets/logo.svg" alt="blogs logo" width="40" class="d-inline-block align-text-top">
                    <span class="my-logo ms-2">IDK</span>
                </a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form class="d-flex" action="/posts">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Temukan postingan">
                        <button class="btn btn-idk px-4 py-2" type="submit" id="button-addon2"><i
                                class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>