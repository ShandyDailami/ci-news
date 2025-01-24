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