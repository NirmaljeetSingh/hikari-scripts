<nav
      id="header"
      class="navbar navbar-expand-xl headroom header-custom"
      aria-label="navbar"
    >
      <div class="container-fluid">
      <x-header.web-site-logo color="red"/>
        <a
          class="d-inline-block navbar-brand text-center me-0 d-md-none align-items-end hikari-logo order-2 order-xl-1"
          href="index.html"
        >
          <span class=""><span class="text-red">Hikari</span>Scripts</span>
        </a>
        <div class="d-inline-flex align-items-center order-3">
          <div class="d-inline-block me-1">
            <input type="checkbox" class="switch-mode-checkbox" id="checkbox" checked="true" />
            <label for="checkbox" class="label">
              <i class="las la-moon"></i>
              <i class="las la-sun"></i>
              <div class="ball"></div>
            </label>
          </div>
          <x-header.signing-section />
        </div>

        <button
          class="order-1 order-xl-3 d-inline-block d-xl-none btn-offcanvas"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#leftOffcanvas"
          aria-controls="leftOffcanvas"
        >
          <i class="las la-bars"></i>
        </button>

        <div class="collapse navbar-collapse order-2" id="hikari">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="blogs.html"
                >ANIME</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blogs.html">MANGA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blogs.html">GAME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blogs.html">WRITER’s PEN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listboard.html">LIST-BOARD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="record.html">RECORD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="authors.html">AUTHORS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="questionnaire.html">QUESTIONNAIRE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.html">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">MAGAZINE</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>