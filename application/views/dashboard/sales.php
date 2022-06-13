<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('partials/head') ?>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/sales.css') ?>" />
  <script src="<?= base_url('assets/js/sales.js') ?>" defer></script>
</head>

<body>
  <header>
    <?php $this->load->view('partials/sidebar') ?>
  </header>

  <!-- Add Product Modal -->
  <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <form action="<?= site_url('sales/add') ?>" enctype="multipart/form-data" method="post" onreset="addProductFormResetHandler(event)">
          <div class="form-input-field">
            <input type="text" name="name" id="addNameInput" placeholder="Input Your Item Name" required />

            <input type="text" name="brand" id="addBrandInput" placeholder="Item Brand" required />

            <input type="number" name="price" id="addPriceInput" min="0" placeholder="Price" required />

            <div class="select-container">
              <select name="type" id="addSelectInput" required>
                <option value="" disabled selected hidden>Item Type</option>
                <?php
                foreach ($types as $row) :
                ?>
                  <option value="<?= $row->id ?>"><?= $row->name ?></option>
                <?php endforeach; ?>
              </select>

              <span>&#9660;</span>
            </div>

            <div class="input-file">
              <label for="addImgFileInput">
                <div class="input-file__img-container">
                  <img id="addImgThumbnail" src="<?= base_url('assets/img/svg/cloud-icon.svg') ?>" alt="Cloud Icon" />
                </div>

                <div id="addImgCaption" class="input-file__placeholder">
                  Upload Image
                </div>
              </label>

              <input type="file" name="image" id="addImgFileInput" accept="image/*" required onchange="addFileUploadChangeHandler(event)" />
            </div>

            <textarea name="description" id="addDescriptionInput" rows="4" placeholder="Enter a Description (ex: Specifications)" required></textarea>
          </div>

          <div class="btn-container">
            <button type="reset" class="btn btn-danger">Clear</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Edit Product Modal -->
  <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editroductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <form action="#" onreset="editProductFormResetHandler(event)">
          <div class="form-input-field">
            <input type="text" name="name" id="editNameInput" placeholder="Masukkan Nama Produk" />

            <input type="text" name="brand" id="editBrandInput" placeholder="Masukkan Merek" />

            <input type="number" name="price" id="editPriceInput" min="0" placeholder="Masukkan Harga" />

            <div class="select-container">
              <select name="type" id="editSelectInput">
                <option value="" disabled selected hidden>Tipe Produk</option>
                <option value="1">Ponsel</option>
                <option value="2">Laptop</option>
              </select>

              <span>&#9660;</span>
            </div>

            <div class="input-file">
              <label for="addImgFileInput">
                <div class="input-file__img-container">
                  <img id="editImgThumbnail" src="<?= base_url('assets/img/svg/cloud-icon.svg') ?>" alt="Cloud Icon" />
                </div>

                <div id="editImgCaption" class="input-file__placeholder">
                  Unggah Gambar Produk
                </div>
              </label>

              <input type="file" name="image" id="editImgFileInput" accept="image/*" onchange="editFileUploadChangeHandler(event)" />
            </div>

            <textarea name="description" id="editDescriptionInput" rows="4" placeholder="Masukan Deskripsi Produk Yang Akan Dijual"></textarea>
          </div>

          <div class="btn-container">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-success">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Delete Product Modal -->
  <div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="#" class="delete-form">
          <h1>
            Are you sure want to delete
            <strong id="deletedProductName"></strong>
            ?
          </h1>

          <div class="btn-container">
            <button type="button" data-bs-dismiss="modal" class="btn btn-danger">
              No
            </button>

            <button type="submit" class="btn btn-success">Yes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <main>
    <section>
      <h1>
        <?= ucfirst($page) ?>
      </h1>

      <div class="sales-content-container">
        <div class="sales-table-container table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Item</th>
                <th scope="col">Brand</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Image</th>
                <th scope="col">Option</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($sales == NULL) { ?>
                <tr>
                  <td colspan="8" align="center">Data is empty</td>
                </tr>
                <?php } else {
                $no = 0;
                foreach ($sales as $row) :
                  $no++; ?>
                  <tr>
                    <th scope="row"><?= $no ?>.</th>
                    <td><?= $row->name ?></td>
                    <td><?= $row->brand ?></td>
                    <td><?= $row->type ?></td>
                    <td>Rp<?= number_format($row->price, 0, ',', '.'); ?></td>
                    <td style="background-color: 
                    <?php
                    if ($row->stockStatus == "Available") {
                      echo "#74e48c";
                    } else if ($row->stockStatus == "Not Available") {
                      echo "#ff8181";
                    }
                    ?>;"><?= $row->stockStatus ?></td>
                    <td>
                      <img src="<?= base_url('assets/img/products/') . $row->img ?>" alt="<?= $row->name ?>" />
                    </td>
                    <td>
                      <button name="editButton" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editProductModal" onclick="editProductClickHandler(
                        event,
                        {
                          name: <?= $row->name ?>,
                          brand: <?= $row->brand ?>,
                          type: <?= $row->type ?>,
                          price: <?= $row->price ?>,
                          imgLink: <?= base_url('assets/img/products/') . $row->img ?>,
                          description: <?= $row->description ?>
                        }
                      )">
                        ✎
                      </button>
                      <?php
                      if ($row->stockStatus != "Not Available") :
                      ?>
                        |
                        <button name="deleteButton" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteProductModal" onclick="deleteClickHandler(
                        event,
                        {
                          id: <?= $row->id ?>,
                          name: <?= $row->name ?>
                        }
                        )">
                          🗑
                        </button>
                      <?php endif; ?>
                    </td>
                  </tr>
              <?php endforeach;
              } ?>
            </tbody>
          </table>
        </div>

        <button name="addButton" class="add-button btn btn-success" data-bs-toggle="modal" data-bs-target="#addProductModal">
          <span>+</span>
          Add
        </button>
      </div>
    </section>
  </main>

  <?php $this->load->view('partials/js') ?>
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