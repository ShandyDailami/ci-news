<!-- <?php if (isset($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= esc($error) ?></li>
      <?php endforeach ?>
    </ul>
  </div>
<?php endif ?> -->
<div class="container">
  <h1>Create News</h1>
  <form action="/" method="post">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="input" name="title" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea name="content" cols="45" rows="4" class="form-control" id="content" placeholder="Content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>