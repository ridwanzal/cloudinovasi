<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="col-sm-3 col-md-2 mr-0" href="<?php echo base_url() ?>dashboard">
        <img src="<?php echo base_url() ?>assets/images/logo_dashboard.svg" height="22">
    </a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#"><span data-feather="activity"></span>&nbsp;&nbsp;<span style="">Online</span></a>
      </li>
    </ul>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#"><span data-feather="bell"></span>&nbsp;&nbsp;<span style="">Notification</span></a>
      </li>
    </ul>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#"><span data-feather="send"></span>&nbsp;&nbsp;Launch Data</a>
      </li>
    </ul>
    <div class="dropdown px-3">
      <button type="button" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown">
        Welcome Ridwan ...
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item small" href="#"><span data-feather="settings"></span>&nbsp;&nbsp;Manage Account</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item small" href="<?php echo base_url() ?>"><span data-feather="log-out"></span>&nbsp;&nbsp;Log out</a>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="<? echo base_url()?>dashboard">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<? echo base_url()?>catalog">
                <span data-feather="book-open"></span>
                Catalog
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<? echo base_url()?>service">
                <span data-feather="briefcase"></span>
                Other Services
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<? echo base_url()?>billing">
                <span data-feather="shopping-cart"></span>
                Billing
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<? echo base_url()?>support">
                <span data-feather="umbrella"></span>
                Support
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="code"></span>
                Integrations
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="book"></span>
                Tutorials
              </a>
            </li>
          </ul>
          <hr/>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a>
            </li>
          </ul>
        </div>
      </nav>