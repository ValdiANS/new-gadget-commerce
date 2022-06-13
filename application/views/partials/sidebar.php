<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <div class="navbar-brand">
            Hello,
            <br />
            <?php
            $explode = explode(" ", $user->name);
            ?>
            <strong><?= $explode[0] ?></strong>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    Hello,
                    <br />
                    <?php
                    $explode = explode(" ", $user->name);
                    ?>
                    <strong><?= $explode[0] ?></strong>
                </h5>

                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('shop') ?>">Shop</a>
                    </li>

                    <?php
                    function active($current_page)
                    {
                        $url_array =  explode('/', $_SERVER['REQUEST_URI']);
                        $url = end($url_array);
                        if ($current_page == $url) {
                            echo 'active'; //class name
                        }
                    }
                    ?>

                    <li class="nav-item">
                        <a class="nav-link <?php active('dashboard'); ?>" aria-current="page" href="<?= site_url('dashboard') ?>">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php active('profile') ?>" href="<?= site_url('profile') ?>">Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php active('sales') ?>" href="<?= site_url('sales') ?>">Sales</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php active('request') ?>" href="<?= site_url('request') ?>">Request</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($this->uri->segment(1) == 'chat') : echo "active";
                                            endif; ?>" href="<?= site_url('chat') ?>">Chat</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php active('wishlist') ?>" href="<?= site_url('wishlist') ?>">Wishlist</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php active('log') ?>" href="<?= site_url('transaction') ?>">Transaction Log</a>
                    </li>
                </ul>

                <a href="<?= site_url('auth/logout') ?>" class="logout-button">Logout</a>
            </div>
        </div>
    </div>
</nav>