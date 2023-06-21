<?php
include 'header.php';
?>
<title>Hasil Apriori | Rule Library</title>

<div class="aprioriProses">
    <div class="card">
        <div class="isiproses">
            <div class="card-header">
                <h3>Hasil Apriori</h3>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <table class="table">
                        <div class="thead">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Min Support</th>
                                    <th scope="col">Min Confidence</th>
                                    <th scope="col">View Rule</th>
                                </tr>
                            </thead>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>