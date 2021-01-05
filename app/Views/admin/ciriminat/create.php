<div class="col-md-10 konten">


    <article class="shadow-sm p-3 bg-white rounded">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Tambah Ciri Minat</h2>
                <form action="/admin/ciriminat/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="kodeciri" class="col-sm-2 col-form-label">Kode Ciri</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="kodeciri" name="kodeciri" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaminat" class="col-sm-2 col-form-label">Ciri Minat</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="ciriminat" name="ciriminat">
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