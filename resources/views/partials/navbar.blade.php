<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #021569">
    <div class="container">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }} " aria-current="page" href="/">Surya Maris P.S</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }} " aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }} " href="/about">About</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  {{ ($active === "posts") ? 'active' : '' }}" href="/blog">Posts</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
              <a class="nav-link {{ ($active === "login") ? 'active' : '' }} text-light " href="/login" > <i class="bi bi-box-arrow-in-right p-3"></i>Login </a>
          </li>
        </ul>
    </div>
  </nav>

  <!-- Akhir Navbar -->