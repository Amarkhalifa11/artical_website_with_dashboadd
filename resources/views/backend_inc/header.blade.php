           <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">


                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- Github Link Button -->



                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <span class="d-none d-lg-inline-block">logout</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-footer">
                        <a href="{{ route('logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header> 