  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-4">
          <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/">
                      <span data-feather="home"></span>
                      <i class="fa-solid fa-gauge"></i>
                      Home</a>
              </li>
              <!-- <li class="nav-item">
                  <a class="nav-link" href="#">
                      <span data-feather="recentitems"></span>
                      <i class="fa-solid fa-file-contract"></i>
                      Recent items
                  </a>
              </li> -->


          </ul>

          <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Documentation</span>
          </h6> -->

          <div class="accordion" id="accordionExample">
              
          
          <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button <?php echo isAccordionSession("architecture") ? "" : "collapsed";?>" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Architecture
                      </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse <?php echo isAccordionSession("architecture") ? "show" : '';?>" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item"><a href="?c=architecture&v=logical-diagram">Logical Diagram</a></li>
                              <li class="list-group-item"><a href="?c=architecture&v=physical-diagram">Physical Diagram</a></li>
                              <li class="list-group-item"><a href="?c=architecture&v=api-sequence-diagram">API Sequence Diagrams</a></li>
                          </ul>
                      </div>
                  </div>
              </div>

              <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button <?php echo isAccordionSession("blockchain") ? "" : "collapsed";?>" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Blockchain
                      </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse <?php echo isAccordionSession("blockchain") ? "show" : '';?>" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item"><a href="?c=blockchain&v=motivation">Motivation</a></li>
                              <li class="list-group-item"><a href="?c=blockchain&v=logical-diagram">Logical Diagram</a></li>
                              <li class="list-group-item"><a href="?c=blockchain&v=api-endpoints">API Endpoints</a></li>
                          </ul>
                      </div>
                  </div>
              </div>

              <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button <?php echo isAccordionSession("ui") ? "" : "collapsed";?>" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          User Interface
                      </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse <?php echo isAccordionSession("ui") ? "show" : '';?>" aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item"><a href="?c=ui&v=framework">UI Framework</a></li>
                              <li class="list-group-item"><a href="?c=ui&v=session">Session Control</a></li>
                          </ul>
                      </div>
                  </div>
              </div>

          </div>


          <div>
              <img src="public/img/academi-chain-logo-inversed.webp" class="img-fluid" style="opacity: 0.5;" />
          </div>
      </div>
  </nav>