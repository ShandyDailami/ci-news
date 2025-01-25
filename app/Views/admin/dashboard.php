<div class="container">
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
              <a href="/admin/delete/<?= esc($news_item['id']) ?>" class="text-decoration-none btn btn-outline-danger">
                <i class="bi bi-trash"></i>
              </a>
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