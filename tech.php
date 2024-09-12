<?php 
$posts = [
    ['title' => 'Some Tech title 1', 'body' => 'Some Tech body 1'],
    ['title' => 'Some Tech title 2', 'body' => 'Some Tech body 2'],
    ['title' => 'Some Tech title 3', 'body' => 'Some Tech body 3'],
    ['title' => 'Some Tech title 4', 'body' => 'Some Tech body 4'],
];
?>
<?php include 'partials/header.php'; ?>

<main class="container">

  <?php include 'partials/hero.php'; ?>

  <?php include 'partials/featured.php'; ?>

  <div class="row g-5">
    <div class="col-md-8">
      <?php include 'partials/posts.php'; ?>
    </div>

    <div class="col-md-4">
      <?php include 'partials/sidebar.php'; ?>
    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>