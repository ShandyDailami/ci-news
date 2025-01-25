<div class="container">
  <?php if (session()->getFlashdata('message')): ?>
    <div class="position-fixed mt-2 me-2 top-0 end-0">
      <div class="alert alert-success flash-message">
        <?= session()->getFlashdata('message') ?>
      </div>
    </div>
  <?php endif ?>
  <div class="row d-flex justify-content-between align-content-center">
    <div class="col">
      <h1 class="mb-3">News yey</h1>
    </div>
    <div class="col-auto">
      <a href="/new" class="btn btn-outline-primary mt-3"><i class="bi bi-plus"></i></a>
    </div>
  </div>
  <?php if ($news_list !== []): ?>
    <?php foreach ($news_list as $news_item): ?>
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title"><?= esc($news_item['title']) ?></h5>
          <p class="card-text"><?= esc($news_item['content']) ?></p>
        </div>
      </div>
    <?php endforeach ?>
  <?php else: ?>
    <h3 class="text-center">No News</h3>
  <?php endif ?>
</div>