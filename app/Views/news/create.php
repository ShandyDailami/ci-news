<div class="container">
  <div class="position-fixed mt-2 me-2 top-0 end-0 d-flex flex-column">
    <?php if (session()->getFlashdata('errors')): ?>
      <?php foreach (session()->getFlashdata('errors') as $error): ?>
        <div class="alert alert-danger flash-message">
          <?= esc($error) ?>
        </div>
      <?php endforeach ?>
    <?php endif ?>
  </div>
  <h1>Buat Berita</h1>
  <form action="/news/create" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="input" name="title" class="form-control" id="title" placeholder="Judul" value="<?= old('title') ?>">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Konten</label>
      <textarea name="content" cols="45" rows="4" class="form-control" id="content"
        placeholder="Konten"><?= old('content') ?></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Buat</button>
  </form>
</div>