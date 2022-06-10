<?php
require_once "../../../script/config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Chat | Gadget Commerce</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
      defer
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
      defer
    ></script>

    <link rel="stylesheet" href="<?= base_url('assets/styles/chat.css') ?>" />
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
          <div class="navbar-brand">
            Halo
            <br />
            <strong>User1</strong>
          </div>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="offcanvas offcanvas-start"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                Halo
                <br />
                <strong>User1</strong>
              </h5>

              <button
                type="button"
                class="btn-close text-reset"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>

            <div class="offcanvas-body">
              <ul class="navbar-nav flex-grow-1">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    aria-current="page"
                    href="<?= base_url('views/pages/dashboard/dashboard.php') ?>"
                  >
                    Dashboard
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/sales.php') ?>">Sales</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/request.php') ?>">Request</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" href="<?= base_url('views/pages/dashboard/chat.php') ?>">Chat</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/wishlist.php') ?>">Wishlist</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('views/pages/dashboard/riwayat.php') ?>">Riwayat</a>
                </li>
              </ul>

              <form action="#">
                <button type="submit" class="logout-button">Logout</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section>
        <h1>Chat</h1>

        <div class="chat-container">
          <div class="chat-header">
            <h2>
              Booyah123
              <span>-</span>
              <span id="productName">Iphone 13 Pro 128GB</span>
            </h2>
          </div>

          <div class="chat-body-container">
            <div class="chat-body">
              <div class="left-chat-container">
                <div class="left-chat">
                  Iphonenya dari 14jt ke 50rb bisa bang?
                </div>

                <small class="left-chat-time">11:14 pm</small>
              </div>

              <div class="right-chat-container">
                <div class="right-chat">Pala kau meletup</div>

                <small class="right-chat-time">6:15 am</small>
              </div>

              <div class="left-chat-container">
                <div class="left-chat">Nanti tokonya aku promoin di yutub</div>

                <small class="left-chat-time">10:00 am</small>
              </div>

              <div class="left-chat-container">
                <div class="left-chat">Subreker aku udah 150</div>

                <small class="left-chat-time">10:00 am</small>
              </div>

              <div class="right-chat-container">
                <div class="right-chat">Turu dek</div>

                <small class="right-chat-time">10:05 am</small>
              </div>

              <div class="left-chat-container">
                <div class="left-chat">pelit bgt bg</div>

                <small class="left-chat-time">11:14 am</small>
              </div>

              <div class="right-chat-container">
                <div class="right-chat">Yeeeeeee</div>

                <small class="right-chat-time">11:15 am</small>
              </div>

              <div class="left-chat-container">
                <div class="left-chat">
                  Iphonenya dari 14jt ke 50rb bisa bang?
                </div>

                <small class="left-chat-time">11:14 pm</small>
              </div>

              <div class="right-chat-container">
                <div class="right-chat">Pala kau meletup</div>

                <small class="right-chat-time">6:15 am</small>
              </div>

              <div class="left-chat-container">
                <div class="left-chat">Nanti tokonya aku promoin di yutub</div>

                <small class="left-chat-time">10:00 am</small>
              </div>

              <div class="left-chat-container">
                <div class="left-chat">Subreker aku udah 150</div>

                <small class="left-chat-time">10:00 am</small>
              </div>

              <div class="right-chat-container">
                <div class="right-chat">Turu dek</div>

                <small class="right-chat-time">10:05 am</small>
              </div>

              <div class="left-chat-container">
                <div class="left-chat">pelit bgt bg</div>

                <small class="left-chat-time">11:14 am</small>
              </div>

              <div class="right-chat-container">
                <div class="right-chat">Yeeeeeee</div>

                <small class="right-chat-time">11:15 am</small>
              </div>
            </div>
          </div>

          <div class="chat-message-input-field">
            <form action="#">
              <textarea name="message" rows="3"></textarea>

              <button type="submit">
                <img
                  src="<?= base_url('assets/img/svg/send-message-icon.svg') ?>"
                  alt="Send Message"
                />
              </button>
            </form>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
