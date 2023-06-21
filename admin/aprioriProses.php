<?php
include 'header.php';
?>
<title>Proses Apriori | Rule Library</title>

<div class="aprioriProses">
    <div class="card">
        <div class="isiproses">
            <div class="card-header">
                <h3>Proses Apriori</h3>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="periode col-sm-7 text-secondary">
                        <form>
                            <div class="row g-3 align-items-center">
                                <div class="col-sm-3">
                                    <label class="col-form-label">ID Peminjaman</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="dari" placeholder="ID Pinjam" required>
                                </div>
                                sampai
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="ke" placeholder="ID Pinjam" required>
                                </div>
                                <br>
                                <div class="col-sm-4 mt-3">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="inputan col-sm-4 text-secondary">
                        <input type="text" name="min_support" class="form-control mb-3" placeholder="Min Support">
                        <input type="text" name="min_confidence" class="form-control mb-3" placeholder="Min Confidence">
                        <div class="row">
                            <div class="col-sm-4 text-secondary">
                                <input type="button" class="btn btn-primary px-4" value="Proses Data">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>