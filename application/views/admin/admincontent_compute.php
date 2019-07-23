<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h3 class=""><?php echo $sub_header_page ?></h3>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button class="btn btn-sm btn-outline-secondary">Share</button>
              <button class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>

        <!-- <canvas class="my-4" id="myChart" width="900" height="380"></canvas> -->
        
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#conf" role="tab" data-toggle="tab">Configure</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#other" role="tab" data-toggle="tab">Choose OS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#other" role="tab" data-toggle="tab">Choose</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#other" role="tab" data-toggle="tab">Package</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#other" role="tab" data-toggle="tab">Configure Network</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#other" role="tab" data-toggle="tab">Billing Cycle</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#other" role="tab" data-toggle="tab">Summary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#other" role="tab" data-toggle="tab">Confirmation</a>
              </li>
            </ul>
          </div>
        </div>


      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="conf">
            <br/>
              <div class="row">
                <div class="col-lg-6 col-md-6">
                <label for="inputPassword" class="font-weight-bold">Virtual Compute Details</label>
                <br/>
                <br/>
                <form>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Region</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="inputPassword" placeholder="Input Subject">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Availability Zone</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="inputPassword" placeholder="Input Category">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Compute Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="inputPassword" placeholder="Input Component">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                      <button class="btn btn-sm btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>


            <div role="tabpanel" class="tab-pane fade" id="other">
              <br/>
                <div class="row">
                  <div class="col-lg-8 col-md-8 col-xs-12">
                    <label for="inputPassword" class="font-weight-bold">Available Version</label>
                  </div>
                  <div class="col-lg-4 col-md-4 col-xs-12">
                      <input type="text" class="form-control  form-control-sm" id="serarch" placeholder="Search">
                  </div>
                </div>
                <div>
              </div>
              <br/>
              <div class="row">
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">CentOS</h6>
                        <span style="" class="badge badge-primary">Version 7.5</span>          
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title">Cloud Linux</h6>
                      <span style="" class="badge badge-primary">Version 6.9</span>          
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title">Debian</h6>
                      <span style="" class="badge badge-primary">Version 9</span>          
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title">Fedora</h6>
                      <span style="" class="badge badge-primary">Version 9</span>          
                    </div>
                  </div>
                </div>
              </div>
              <br/>
              <div class="row">
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title">OpenSuse</h6>
                      <span style="" class="badge badge-primary">Version 9</span>          
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title">Suse</h6>
                      <span style="" class="badge badge-primary">Version 9</span>          
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title">Ubuntu</h6>
                      <span style="" class="badge badge-primary">16.04</span>          
                    </div>
                  </div>
                </div>
                <br/>
              </div>
              <br/>
              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-sm btn-primary">Submit</button>
                </div>
              </div>
            </div>
          </div>

    </main> 