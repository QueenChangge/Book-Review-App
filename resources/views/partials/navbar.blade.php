<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">BOOK'S SHOP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title=== "TOP BOOKS") ? 'active fw-bold' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title=== "SEARCH") ? 'active fw-bold' : '' }}" href="/search">SEARCH</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title=== "ADD REVIEW") ? 'active fw-bold' : '' }}" href="/review">REVIEW</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>