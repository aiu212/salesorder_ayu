<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-sm">

            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle d-flex align-items-center"
                       href="#"
                       id="userDropdown"
                       role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false">

                        <div class="text-right mr-3">
                            <div class="small text-muted">
                                <?= ucfirst($this->session->userdata('role')); ?>
                            </div>
                            <div class="font-weight-bold text-dark">
                                <?= $this->session->userdata('username'); ?>
                            </div>
                        </div>

                        <img class="img-profile rounded-circle"
                             src="<?= base_url('assets/img/undraw_profile_2.svg'); ?>">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                        <a class="dropdown-item text-danger" href="<?= base_url('logout'); ?>">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>