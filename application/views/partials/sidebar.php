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

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= site_url('dashboard') ?>">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('profile') ?>">Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('sales') ?>">Sales</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('request') ?>">Request</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('chat') ?>">Chat</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('wishlist') ?>">Wishlist</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('transaction') ?>">Log Transaction</a>
                    </li>
                </ul>

                <form action="#">
                    <button type="submit" class="logout-button">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>