<div class="col-md-10 konten">


    <article class="shadow-sm p-3 bg-white rounded">
        <div class="paragraf">
            <h2>Analisa</h2>
            <form action="/analisa/hasil" method="post">
                <?= csrf_field(); ?>
                <table class="table">
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($analisa as $pertanyaan) : ?>
                            <tr>
                                <td><?= $i; ?>. Apakah anda <?= $pertanyaan['ciri_minat']; ?> ?<br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="ciriminat<?= $i ?>" id="validationDefault<?= $i ?>" value="option1" required>
                                        <label class="form-check-label" for="ciriminat<?= $i ?>">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="ciriminat<?= $i ?>" id="validationDefault<?= $i ?>" value="option2" required>
                                        <label class="form-check-label" for="ciriminat<?= $i ?>">Tidak</label>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Lihat Hasil</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
    </article>

</div>
</div>