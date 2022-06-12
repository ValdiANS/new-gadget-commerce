<nav class="navbar navbar-expand-md navbar-light px-4 bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('') ?>">
            <img src="<?= base_url('assets/img/G.png') ?>" alt="Logo G-Comm" />
            <h1>
                Gadget
                <br />
                Commerce
            </h1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('') ?>">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="aboutNavbarDropdown">
                        <li>
                            <a class="dropdown-item" href="<?= site_url('about/contact') ?>">
                                Contact
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="<?= site_url('about') ?>">
                                About Us
                            </a>
                        </li>
                    </ul>
                </li>

                <?php if ($this->session->userdata('username')) { ?>
                    <li class="nav-item">
                        <a class="nav-link user-btn" href="<?= site_url('dashboard') ?>">
                            <div class="img-container">
                                <img src="<?= base_url('assets/img/users/') . $user->img ?>" alt="Profile Picture">
                            </div>
                            <?php
                            $explode = explode(" ", $user->name);
                            ?>
                            <span><?= $explode[0] ?></span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link login-btn" href="<?= site_url('auth/login') ?>">Login</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>