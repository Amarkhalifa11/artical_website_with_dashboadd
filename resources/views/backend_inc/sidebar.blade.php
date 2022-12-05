<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('dashboard') }}">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">admin dasnboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">





                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">User</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('all_users') }}">
                                    <span class="rotate-180">All user</span>

                                </a>
                            </li>

                        </div>
                    </ul>
                </li>


                <li class="has-sub active expand">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                      data-target="#documentation" aria-expanded="false" aria-controls="documentation">
                      <i class="mdi mdi-book-open-page-variant"></i>
                      <span class="nav-text">cat & art</span> <b class="caret"></b>
                  </a>
                  <ul class="collapse" id="documentation" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                          <li>
                              <a class="sidenav-item-link" href="{{ route('categories.index') }}">
                                  <span class="nav-text">all category</span>
  
                              </a>
                          </li>
                          <li>
                              <a class="sidenav-item-link" href="{{ route('categories.create') }}">
                                  <span class="nav-text">Add category</span>
  
                              </a>
                          </li>

                          <li>
                            <a class="sidenav-item-link" href="{{ route('all_articals') }}">
                                <span class="nav-text">all articals</span>

                            </a>
                        </li>

                        <li>
                          <a class="sidenav-item-link" href="{{ route('all_articals.create') }}">
                              <span class="nav-text">add articals</span>

                          </a>
                      </li>

                      </div>
                  </ul>
              </li>


                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">comments</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('all_comments') }}">
                                    <span class="rotate-180">All comments</span>

                                </a>
                            </li>
                        </div>
                    </ul>
                </li>





                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                        aria-expanded="false" aria-controls="charts">
                        <i class="mdi mdi-chart-pie"></i>
                        <span class="nav-text">ask</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="charts" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li>
                                <a class="sidenav-item-link" href="{{ route('all_ask') }}">
                                    <span class="nav-text">all contact</span>

                                </a>
                            </li>

                        </div>
                    </ul>
                </li>





                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                        aria-expanded="false" aria-controls="pages">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">employee</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="pages" data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li>
                                <a class="sidenav-item-link" href="{{ route('all_employee') }}">
                                    <span class="nav-text">All employee</span>

                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ route('all_employee.create') }}">
                                    <span class="nav-text">Add employee</span>

                                </a>
                            </li>

                        </div>
                    </ul>
                </li>

            </ul>

        </div>

        <hr class="separator" />


    </div>
</aside>
