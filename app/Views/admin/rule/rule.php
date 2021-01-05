<div class="col-md-10 konten">


  <article class="shadow-sm p-3 bg-white rounded">
    <div class="paragraf">
      <h2>Basis Pengetahuan</h2>
      <a button class="btn btn-primary" type="submit" href="/admin/rule/create/">Tambah Pengetahuan</a>
      <br><br>
      <?php $i = 1; ?>
      <table class="table" style="font-size:13px;">
        <thead>

          <tr>
            <th scope="col">No</th>
            <th scope="col">Penelitian</th>
            <th scope="col">Ciri</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <?php foreach ($rule as $row) : ?>
          <tbody>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <?php
              $kalimat1 = substr($row['nama_minat'], 11);
              ?>
              <td><?= $kalimat1 ?></td>
              <td><?= $row['ciri_minat']; ?></td>
              <td><a button type="button" class="btn btn-primary btn-sm" href="/admin/rule/update/<?= $row['id']; ?>" style="">Ubah</button><a button type="button" class="btn btn-primary btn-sm btn-hapus" href="/admin/rule/delete/<?= $row['id']; ?>">Hapus</button></td>
            </tr>
            <?php $i++ ?>
          <?php endforeach; ?>
          </tbody>
      </table>
    </div>
  </article>

</div>
</div>