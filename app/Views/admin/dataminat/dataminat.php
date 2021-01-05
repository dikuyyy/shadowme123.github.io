<div class="col-md-10 konten">


  <article class="shadow-sm p-3 bg-white rounded">
    <div class="paragraf">
      <a href="/admin/dataminat/create" class="btn btn-primary" type="submit">Tambah Minat</a>
      <h2>Data Minat Penelitian</h2>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          Data berhasil ditambahkan!
        </div>
      <?php endif; ?>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama Jenis Penelitian</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($dataminat as $minat) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $minat['id_minat']; ?></td>
              <td><?= $minat['nama_minat']; ?></td>
              <td><a type="button" class="btn btn-primary btn-sm" href="/admin/dataminat/update/<?= $minat['id_minat'] ?>">Ubah</a>
                <form action="/dataminat/<?= $minat['id_minat']; ?>" method="post" class="d-inline">
                  <?= csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-primary btn-sm">Hapus</button>
                </form>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </article>

</div>
</div>