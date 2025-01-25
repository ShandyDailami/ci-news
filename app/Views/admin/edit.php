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
  <h1>Edit Berita</h1>
  <form action="/admin/update/<?= esc($news_item['id']) ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="id" value="<?= esc($news_item['id']) ?>">
    <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="input" name="title" class="form-control" id="title" placeholder="Judul"
        value="<?= esc($news_item['title']) ?>">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Konten</label>
      <textarea name="content" cols="45" rows="4" class="form-control" id="content"
        placeholder="Konten"><?= esc($news_item['content']) ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
</div>