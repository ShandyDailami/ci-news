<?php if (session()->getFlashdata('errors')): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach (session()->getFlashdata('errors') as $error): ?>
        <li><?= esc($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>

<div class="container">
  <h1>Edit News</h1>
  <form action="/admin/update/<?= esc($news_item['id']) ?>" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="input" name="title" class="form-control" id="title" placeholder="Title"
        value="<?= esc($news_item['title']) ?>">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea name="content" cols="45" rows="4" class="form-control" id="content"
        placeholder="Content"><?= esc($news_item['content']) ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>