<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #021569">
    <div class="container">
      <a class="navbar-brand" href="/">Surya M P Simarmata</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
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
      </div>
    </div>
  </nav>

  <!-- Akhir Navbar -->