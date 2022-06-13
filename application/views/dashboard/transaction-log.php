<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/riwayat.css') ?>" />
</head>

<body>
  <header>
    <?php $this->load->view('partials/sidebar') ?>
  </header>

  <main>
    <section>
      <h1><?= ucfirst($page) ?> Log</h1>

      <div class="riwayat-content-container">
        <div class="riwayat-table-container table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Seller</th>
                <th scope="col">Buyer</th>
                <th scope="col">Item</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Response Date</th>
                <th scope="col"></th>
              </tr>
            </thead>

            <tbody>
              <?php
              if ($transactions == NULL) { ?>
                <tr>
                  <td colspan="7" align="center">Data is empty</td>
                </tr>
                <?php } else {
                $no = 0;
                foreach ($transactions as $row) :
                  $no++; ?>
                  <tr>
                    <th scope="row"><?= $no ?>.</th>
                    <td><?php
                        if ($row->user_sellerid == $this->session->userdata('user_id')) { ?>
                        <strong><?= $row->seller ?></strong>
                      <?php } else {
                          echo $row->seller;
                        } ?>
                    </td>
                    <td><?php
                        if ($row->user_buyerid == $this->session->userdata('user_id')) { ?>
                        <strong><?= $row->buyer ?></strong>
                      <?php } else {
                          echo $row->buyer;
                        } ?>
                    </td>
                    <td><?= $row->sale ?></td>
                    <td>Rp<?= number_format($row->price, 0, ',', '.'); ?></td>
                    <td style="background-color: 
                    <?php
                    if ($row->status == "Accepted") {
                      echo "#74e48c";
                    } else if ($row->status == "Declined") {
                      echo "#ff8181";
                    }
                    ?>;"><?= $row->status ?></td>
                    <td><?= date_format(date_create($row->date), "l, F d Y") ?></td>
                    <!-- <td>
                      <a href="<?= site_url('request/') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                        &#x22EF;
                      </a>
                    </td> -->
                  </tr>
              <?php
                endforeach;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </main>
</body>

</html>