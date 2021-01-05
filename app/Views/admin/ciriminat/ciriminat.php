<div class="col-md-10 konten">


  <article class="shadow-sm p-3 bg-white rounded">
    <div class="paragraf">
      <h2>Ciri Minat Penelitian</h2>
      <a class="btn btn-primary" type="submit" href="ciriminat/create">Tambah Ciri Minat</a>
      <br><br>
      <?php if ($cek <> 0) : ?>
        <div class="table-responsive">
          <table class="table table-striped" style="font-size: 14px;">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode</th>
                <th scope="col">Ciri Minat Penelitian</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($ciriminat as $minat) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $minat['id_ciri']; ?></td>
                  <td><?= $minat['ciri_minat']; ?></td>
                  <td><a button type="button" class="btn btn-primary btn-sm" href="/admin/ciriminat/ubah/<?= $minat['id_ciri'] ?>">Ubah</button><a href="ciriminat/delete/<?= $minat['id_ciri'] ?>" button type="button" class="btn btn-primary btn-sm btn-hapus">Hapus</button></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      <?php endif; ?>
    </div>
  </article>

</div>
</div>