<?php
require 'header.php';
?>
<title>Edit Kategori | Rule Library</title>
<div class="profile">
    <div class="card mt-3">
        <div class="isiprofile">
            <h2 class="mt-3">Edit Kategori</h2>
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">ID Kategori</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="John Doe">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama Kategori</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="john@example.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <input type="button" class="btn btn-primary px-4" value="Save Changes">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require 'footer.php';
        ?>