        <!-- Message Centre -->
        <div class="modal fade" id="messageCentre" tabindex="-1" role="dialog" aria-labelledby="messageCentreTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header card-header">
                <h5 class="modal-title" id="messageCentreTitle">Message Centre</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="messageCentreMessage">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-md scrolling-navbar">
            <a class="navbar-brand-xl" href="?page=dashboard"><img src="images/logo.png" alt="Opencasetracker Logo" width="35" height="35" class="d-inline-block align-top" /></a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="dropdown nav-item">
                            <a class="nav-link" href="?page=dashboard">Home</a>
                        </div>
                    </li>     
                    <li class="nav-item">
                        <div class="dropdown nav-item">
                            <button class="btn dropdown-toggle" style='background-color: #6ab446; color: white; margin-top: 1px' type="button" id="caseNavigatorButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cases
                            </button>                        
                            <div class="dropdown-menu pl-0" aria-labelledby="caseMenuButton">
                                <a class="dropdown-item pl-1 ml-0" href="#" id="navToCases"><img id="case-card-toggle-image" src='images/clipboard.svg' class='p-1' width='28px' title="Hide case details" /> Browse cases</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item pl-1 ml-0" href="#" id="navToNewCase"><img id="case-edit-image" src="images/compose.svg" class='p-1' width='28px' title='Create new case' /> Create case</a>
                                <a class="dropdown-item pl-1 ml-0" href="#" id="navToNewEnquiry"><img id="case-email-image" src="images/telephone.svg" class="p-1" width="28px" title="Create new enquiry" /> Create enquiry</a>
                            </div>
                        </div>
                        
                    </li>
                    <li class="nav-item">
                        <div class='dropdown nav-item'>
                            <a class="nav-link" href="?page=reports">Reports</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=options">Options</a>
                    </li>
                    <?php
                        if(isset($admin) && $admin) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=admin">Admin</a>
                    </li>
                    <?php
                        }
                    ?>
                    <li class="nav-item">
                        <div class="dropdown nav-item">
                            <button class="btn dropdown-toggle" style='background-color: #6ab446; color: white; margin-top: 1px' type="button" id="accountNavigatorButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Account
                            </button>                        
                            <div class="dropdown-menu pl-0" aria-labelledby="optionsMenuButton">
                                <a class="dropdown-item pl-1 ml-0" href="#" id="navToAccount"><img id="case-card-toggle-image" src='images/user.svg' class='p-1' width='28px' title="Manage Account" /> Manage account</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item pl-1 ml-0" href="#" id="navToLogout"><img id="case-edit-image" src="images/sign-out.svg" class='p-1' width='28px' title='Logout' /> Logout</a>
                            </div> 
                        </div>
                    </li>
                    <li class="nav-link">
                        <input id="goto" class="form-control p-0 h-auto w-auto text-center" type="text" size="2" placeholder="##" />
                    </li>
                    
                </ul>
            </div>
            
        </nav>

