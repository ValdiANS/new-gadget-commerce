<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/request.css') ?>" />
  <script src="<?= base_url('assets/js/request.js') ?>" defer></script>
</head>

<body>
  <header>
    <?php $this->load->view('partials/sidebar') ?>
  </header>

  <!-- Review Modal -->
  <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <form action="#">
          <h1>Review - <strong id="reviewedProductName">[Nama Produk]</strong></h1>

          <div class="input-field-container">
            <div class="input-field rating">
              <label for="rating">Rating</label>

              <div class="select-container">
                <select name="rating" id="rating" required>
                  <option value="" disabled selected hidden>Rating</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>

                <span>&#9660;</span>
              </div>

              <span class="star">★</span>
            </div>

            <div class="input-field review-description">
              <label for="reviewDescription">Review</label>

              <textarea name="reviewDescription" id="reviewDescription" rows="4" placeholder="Masukkan Review" required></textarea>
            </div>
          </div>

          <div class="btn-container">
            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">
              Batal
            </button>

            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <main>
    <section>
      <div class="section-header">
        <h1><?= ucfirst($page) ?></h1>

        <button id="toggleRequest" class="toggle-request btn btn-success mt-2" onclick="toggleRequestTable(event)">
          View your request as
          <strong>buyer</strong>
        </button>
      </div>

      <div id="sellerRequest" class="seller-request-content-container">
        <div class="seller-request-table-container table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Request Date</th>
                <th scope="col">Buyer</th>
                <th scope="col">Item</th>
                <th scope="col">Offer</th>
                <th scope="col">Response</th>
              </tr>
            </thead>

            <tbody>
              <?php
              if ($requestSeller == NULL) { ?>
                <tr>
                  <td colspan="6" align="center">Data is empty</td>
                </tr>
                <?php } else {
                $no = 0;
                foreach ($requestSeller as $row) :
                  $no++; ?>
                  <tr>
                    <th scope="row"><?= $no ?>.</th>
                    <td><?= date_format(date_create($row->date_req), "l, d M Y") ?></td>
                    <td><?= $row->buyer ?></td>
                    <td><?= $row->sale ?></td>
                    <td>Rp<?= number_format($row->price_req, 0, ',', '.'); ?></td>
                    <td>
                      <form method="post" id="acceptRequest">
                        <input type="hidden" value="<?= $row->id ?>" name="reqId">
                        <input type="hidden" value="Accepted" name="status">
                        <button type="submit" class="checkmark btn btn-success">
                          &#10003;
                        </button>
                      </form>

                      <form method="post" id="declineRequest">
                        <input type="hidden" value="<?= $row->id ?>" name="reqId">
                        <input type="hidden" value="Declined" name="status">
                        <button type="submit" class="cross btn btn-danger">
                          &#10006;
                        </button>
                      </form>

                      <a href="<?= site_url('chat/request/') . $row->id ?>">
                        <button type="submit" class="chat">
                          <img src="<?= base_url('assets/img/svg/chat-icon.svg') ?>" alt="Chat" />
                        </button>
                      </a>
                    </td>
                  </tr>
              <?php endforeach;
              } ?>
            </tbody>
          </table>
        </div>
      </div>

      <div id="buyerRequest" class="buyer-request-content-container d-none">
        <div class="buyer-request-table-container table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Request Date</th>
                <th scope="col">Seller</th>
                <th scope="col">Item</th>
                <th scope="col">Offer</th>
                <th scope="col">Status</th>
                <th scope="col">Response</th>
              </tr>
            </thead>

            <tbody>
              <?php
              if ($requestBuyer == NULL) { ?>
                <tr>
                  <td colspan="7" align="center">Data is empty</td>
                </tr>
                <?php } else {
                $no = 0;
                foreach ($requestBuyer as $row) :
                  $no++; ?>
                  <tr>
                    <th scope="row"><?= $no ?>.</th>
                    <td><?= date_format(date_create($row->date_req), "l, F d Y") ?></td>
                    <td><?= $row->seller ?></td>
                    <td><?= $row->sale ?></td>
                    <td>Rp<?= number_format($row->price_req, 0, ',', '.'); ?></td>
                    <td style="background-color: 
                    <?php
                    if ($row->status == "Accepted") {
                      echo "#74e48c";
                    } else if ($row->status == "Request") {
                      echo "#f4f9f9";
                    }
                    ?>;"><?= $row->status ?></td>
                    <td>
                      <a href="<?= site_url('chat/request/') . $row->id ?>">
                        <button type="submit" class="chat">
                          <img src="<?= base_url('assets/img/svg/chat-icon.svg') ?>" alt="Chat" />
                        </button>
                      </a>
                      <?php
                      if ($row->status == "Accepted") : ?>
                        |
                        <button class="btn btn-success 
                          <?php
                          if ($reviewCheck != NULL) : echo "reviewed";
                          else : "";
                          endif;
                          ?>" data-bs-toggle="modal" data-bs-target="#reviewModal" onclick="reviewClickHandler(
                      event,
                          {
                            name: <?= $row->sale ?>
                          }
                          )">
                          ☆
                          <?php
                          // if ($reviewCheck == NULL) : echo "★";
                          // else : "☆";
                          // endif; 
                          ?>
                        </button>
                      <?php endif; ?>
                    </td>
                  </tr>
              <?php endforeach;
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </main>
  <?php $this->load->view('partials/js') ?>
  <script>
    $("#acceptRequest").on('submit', function(event) {
      event.preventDefault();
      $.ajax({
        url: '<?= site_url('request/acceptReq') ?>',
        method: 'post',
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data) {
          if (data.error) {
            //error
          }
          if (data.success) {
            Swal.fire({
              icon: 'success',
              title: data.message,
              showConfirmButton: false,
              timer: 2500
            }).then(function() {
              window.location = "<?= site_url('request') ?>"
            });
          }
        }
      })
    });
    $("#declineRequest").on('submit', function(event) {
      event.preventDefault();
      $.ajax({
        url: '<?= site_url('request/declineReq') ?>',
        method: 'post',
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data) {
          if (data.error) {
            //error
          }
          if (data.success) {
            Swal.fire({
              icon: 'success',
              title: data.message,
              showConfirmButton: false,
              timer: 2500
            }).then(function() {
              window.location = "<?= site_url('request') ?>"
            });
          }
        }
      })
    });
  </script>
  <script type="text/javascript">
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
    }
    <?= $this->session->flashdata('message'); ?>
  </script>
</body>

</html>