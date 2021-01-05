<div class="col-md-10 konten">


    <article class="shadow-sm p-3 bg-white rounded">
        <div class="paragraf">
            <h4>Kecenderungan yang di pilih</h4>
            <div class="table-responsive">
                <table class="table table-striped" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kecenderungan Minat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        $x = 0; ?>

                        <?php foreach ($kecenderungan as $row) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $row; ?></td>
                            </tr>
                            <?php $i++;
                            $x++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <h4>Analisa</h4>
            <div class="table-responsive">
                <table class="table table-striped" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Jenis Penelitian</th>
                            <th scope="col">Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        $x = 0; ?>
                        <?php foreach ($jenispenelitian as $row) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $row['nama_minat']; ?></td>
                                <?php if ($row['nama_minat'] == 'Penelitian Murni') :  ?>
                                    <td><?= $hasilmurni; ?>%</td>
                                <?php endif;  ?>
                                <?php if ($row['nama_minat'] == 'Penelitian Pendidikan') :  ?>
                                    <td><?= $hasilpendidikan; ?>%</td>
                                <?php endif;  ?>
                            </tr>
                            <?php $i++;
                            $x++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <h4>Hasil</h4>
            <div class="table-responsive">
                <table class="table table-striped" style="font-size: 14px;">
                    <tbody>
                        <tr>
                            <td>Jenis Penelitian</td>

                            <td><?= $hasil; ?></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </article>

</div>
</div>