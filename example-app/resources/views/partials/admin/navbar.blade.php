<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">WPU ADMIN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " {{ ($title === "Dashboard") ? 'active' : ''}} href="{{ route('admin.dashboard') }}">Dashboard</a>
          </li>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " {{ ($title === "Blog") ? 'active' : ''}} href="{{ route('admin.blog.index') }}">Blog</a>
          </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " {{ ($title === "About") ? 'active' : ''}} href="{{ route('admin.about.index') }}">About</a>
            </li>
          </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " {{ ($title === "User") ? 'active' : ''}} href="{{ route('admin.user.index') }}">User</a>
            </li>
          </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " {{ ($title === "category") ? 'active' : ''}} href="{{ route('admin.category.index') }}">Category</a>
            </li>
          </ul>
      </div>
    </div>
  </nav>