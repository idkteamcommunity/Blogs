<a class="navbar-toggler" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
    aria-controls="offcanvasExample">
    <span class="navbar-toggler-icon"></span>
</a>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="Assets/logo.svg" alt="blogs logo" width="40" class="d-inline-block align-text-top">
                <span class="my-logo ms-2">IDK</span>
            </a>
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <ul class="navbar-nav px-4">
        <li class="nav-item">
            <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/"><i
                    class="bi bi-house-door-fill"></i>
                Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/blog"><i
                    class="bi bi-blockquote-left"></i> Blogs</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ $active === 'category' ? 'active' : '' }}" href="/category"
                id="category" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-x-diamond-fill"></i> Category
            </a>
            <ul class="dropdown-menu" id="navbarCategory" aria-labelledby="category">
            </ul>
        </li>
    </ul>
</div>
