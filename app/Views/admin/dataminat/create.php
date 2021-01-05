<div class="col-md-10 konten">


    <article class="shadow-sm p-3 bg-white rounded">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Tambah Data Minat</h2>
                <form action="admin/dataminat/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="kodeminat" class="col-sm-2 col-form-label">Kode Minat</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="kodeminat" name="kodeminat" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaminat" class="col-sm-2 col-form-label">Nama Minat</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="namaminat" name="namaminat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
</div>
</div>