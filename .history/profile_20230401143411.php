
<!DOCTYPE html>

<html lang="en">
  <?php include 'include/head.php'; ?>
<body>

<!-- navigation -->
  <?php require "include/navbar.php";  ?>
<!-- /navigation -->

<!-- start of banner -->
<div class="header has-text-centered">
  <div class="container">
    <div class="columns">
      <div class="column is-9-widescreen mx-auto">
        <h1 class="mb-4">Ahodakin</h1>
        <ul class="list-inline">
          <li class="list-inline-item"><a class="text-default" href="index.php">Home
              &nbsp; &nbsp; /</a></li>
          <li class="list-inline-item text-primary">Accéder</li>
        </ul>
      </div>
    </div>
  </div>
  
  <?php require "include/design.php";  ?>
</div>
<!-- end of banner -->

<section class="section-sm">
  <div class="container">
    <div class="columns is-multiline is-desktop is-justify-content-center">
      <div class="column is-8-desktop mb-5">
  <h2 class="h5 section-title">Recent Post</h2>

  <article class="card mb-4">

  <div class="card-body">
      <h3 class="mb-3"><a class="post-title" href="post-elements.html">Elements That You Can Use In This Template.</a></h3>
      <ul class="card-meta list-inline">
        <li class="list-inline-item">
            <a href="author-single.html" class="card-meta-author">
            <span>John Doe</span>
            </a>
        </li>
        <li class="list-inline-item">
            <i class="ti-calendar"></i>15 jan, 2020
        </li>
        <li class="list-inline-item">
        </li>
      </ul>

      <div>
        <p>Heading example Here is example of hedings. You can use this heading by following markdownify rules. For example: use # for heading 1 and use ###### for heading 6.</p>
      </div>
  </div>
  </article>

  </div>
</section>

 <!-- footer-->
 <?php require "include/footer.php";  ?>
<!-- /footer-->

</html>


