<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/chat.css') ?>" />
  <script src="<?= base_url('assets/js/chat.js') ?>" defer></script>
</head>

<body>
  <header>
    <?php $this->load->view('partials/sidebar') ?>
  </header>

  <main>
    <section>
      <h1><?= ucfirst($page) ?></h1>

      <div class="chat-container">
        <div class="chat-header">
          <h2>
            <?= $detailItem->seller ?>
            <span>-</span>
            <span id="productName"><?= $detailItem->sale ?></span>
          </h2>
        </div>

        <div class="chat-body-container">
          <div class="chat-body">
            <?php
            $no = 0;
            foreach ($chats as $row) :
              $no++; ?>
              <div class="<?= ($row->from_user_id == $this->session->userdata('user_id')) ? 'right-chat-container' : 'left-chat-container'; ?>">
                <div class="<?= ($row->from_user_id == $this->session->userdata('user_id')) ? 'right-chat' : 'left-chat'; ?>">
                  <?= $row->description ?>
                </div>
                <small class="left-chat-time"><?= $row->time ?></small>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="chat-message-input-field">
          <form method="post" id="sendMessages">
            <input type="hidden" name="to_userId" value="<?= $detailItem->user_sellerid ?>">
            <input type="hidden" name="to_reqId" value="<?= $detailItem->id ?>">
            <textarea name="message" rows="3" oninput="messageInputChangeHandler(event)"></textarea>

            <button type="submit" id="sendMessageBtn" disabled>
              <img src="<?= base_url('assets/img/svg/send-message-icon.svg') ?>" alt="Send Message" />
            </button>
          </form>
        </div>
      </div>
    </section>
  </main>
  <?php $this->load->view('partials/js') ?>
  <script>
    toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-bottom-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "4000",
      "extendedTimeOut": "2500",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    };
    $("#sendMessages").on('submit', function(event) {
      event.preventDefault();
      $.ajax({
        url: '<?= site_url('chat/sendMessage') ?>',
        method: 'post',
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data) {
          if (data.error) {
            //error
          }
          if (data.success) {
            Command: toastr["success"](data.message)
            $('#chat-body').innerHTML += `
            <div class="left-chat-container">
              <div class="left-chat">
                ${data.descMessage}
              </div>
              <small>${data.timeMessage}</small>
            </div>
            `
          }
        }
      })
    });
  </script>
</body>

</html>