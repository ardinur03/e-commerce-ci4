<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-9">
            <div class="card p-3 shadow">
                <div class="card-body">
                    <h2 class="text-center mb-2">Transaction Detail</h2>
                    <div class="text-center">
                        <i class="bi bi-check-circle fs-1 text-success"></i>
                    </div>
                    <p class="text-center mt-3 mb-5">
                        Terima kasih atas pembelian Anda. Pesanan Anda telah berhasil diproses dan akan segera dikirim.
                    </p>
                    <div class="row mb-3">
                        <div class="col-md-3">Nama Lengkap:</div>
                        <div class="col-md-9"><?= $data_transaksi[0]['nama'] ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">No. HP:</div>
                        <div class="col-md-9"><?= $data_transaksi[0]['no_hp'] ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Alamat:</div>
                        <div class="col-md-9">
                            <?= $data_transaksi[0]['alamat'] ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Tanggal:</div>
                        <div class="col-md-9"><?= $data_transaksi[0]['tanggal'] ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3 mt-2">
                            <div class="col-md-3">Detail Barang:</div>
                            <div class="col-md-9">
                                <table class="table table-sm table-hover">
                                    <thead class="text-center table-warning">
                                        <tr>
                                            <th style="font-size: 12px !important;">Nama Barang <sub>(Berat)</sub></th>
                                            <th style="font-size: 12px !important;">Qty</th>
                                            <th style="font-size: 12px !important;" class="text-end">Total Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data_transaksi as $key => $value) { ?>
                                            <tr>
                                                <td><?= $value['nama_barang'] ?><sub class="text-secondary">(50gram)</sub></td>
                                                <td class="text-center"><?= $value['jumlah_barang_terjual'] ?>x</td>
                                                <td class="text-end">Rp. <?= number_format($value['hargajual'], 0, ',', '.') ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- hitung ongkos kirimnya -->
                        <div class="row mb-3">
                            <div class="col-md-3 mt-2">Ongkos Kirim:</div>
                            <div class="col-md-9">
                                <table class="table table-sm table-hover">
                                    <thead class="text-center  table-warning">
                                        <tr>
                                            <th style="font-size: 12px !important;">Kecamatan Awal</th>
                                            <th style="font-size: 12px !important;">Kecamatan Tujuan</th>
                                            <th style="font-size: 12px !important;" class="text-end">Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">Setiamanah</td>
                                            <td class="text-center"><?= $data_transaksi[0]['kecamatan'] ?></td>
                                            <td class="text-end">Rp. <?= number_format($harga_ongkir, 0, ',', '.') ?>,-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">Total Transaksi:</div>
                            <div class="col-md-9 text-end">Rp. <?= number_format($data_transaksi[0]['total_transaksi'], 0, ',', '.') ?>,-</div>
                            <hr>
                        </div>
                        <div class="d-grid gap-2 mt-5">
                            <a href="<?= base_url('/cart') ?>" class="btn btn-primary">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>