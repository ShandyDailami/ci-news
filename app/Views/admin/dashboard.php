<div class="container">
  <?php if (session()->getFlashdata('message')): ?>
    <div class="position-fixed mt-2 me-2 top-0 end-0">
      <div class="alert alert-success flash-message">
        <?= session()->getFlashdata('message') ?>
      </div>
    </div>
  <?php endif ?>
  <h1>Dashboard</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($news_list)): ?>
        <?php foreach ($news_list as $index => $news_item): ?>
          <tr>
            <th scope="row"><?= $index + 1 ?></th>
            <td><?= esc($news_item['title']) ?></td>
            <td><?= esc($news_item['content']) ?></td>
            <td colspan="2">
              <a href="/admin/edit/<?= esc($news_item['id']) ?>" class="text-decoration-none btn btn-outline-primary">
                <i class="bi bi-pencil-square"></i>
              </a>
              <button type="button" data-bs-target="#delete" data-bs-toggle="modal" class="btn btn-outline-danger"
                data-id="<?= esc($news_item['id']) ?>">
                <i class="bi bi-trash"></i>
              </button>
              <!-- <a data-bs-target="#delete" data-bs-toggle="modal" class="text-decoration-none btn btn-outline-danger">
              </a> -->
            </td>
          </tr>
        <?php endforeach ?>
      <?php else: ?>
        <tr>
          <td colspan="4" class="text-center">No News items found</td>
        </tr>
      <?php endif ?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-primary" id="confirmDelete">Hapus</button>
      </div>
    </div>
  </div>
</div>