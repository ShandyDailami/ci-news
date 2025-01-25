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
  <h1>Create News</h1>
  <form action="/news/create" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="input" name="title" class="form-control" id="title" placeholder="Title" value="<?= old('title') ?>">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea name="content" cols="45" rows="4" class="form-control" id="content"
        placeholder="Content"><?= old('content') ?></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Create</button>
  </form>
  <!-- <div class="position-fixed top-0 end-0 d-flex flex-column" style="z-index: 1050;">
    <div class="alert alert-danger">
      test
    </div>
    <div class="alert alert-danger">
      test
    </div>
  </div> -->
</div>