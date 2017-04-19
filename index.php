
<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Home &mdash; Organisation Title</title>
  <meta name="description" content="We meet at Dove Lodge, 49 Beach road, Littlehampton on alternate Sundays from 2pm to 5pm. Our objective is to advance the education and welfare of adults with learning difficulties, and to provide support for their families and carers, in order to provide a better standard of life for such people.">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS & JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css"><!-- reset file do not change -->
  <link rel="stylesheet" href="css/skeleton.css"><!-- framework CSS -->
  <link rel="stylesheet" href="css/style.css"><!--my additions-->
  <link rel="stylesheet" href="css/breaks.css"><!--breakpoints of mine-->

  <script>document.createElement('main');</script><!--fix for support of HTML5 <main> element-->

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Google fonts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet"><!--Bench Nine Google Font for headers-->
</head>

<body>



<header role="banner">
  <nav class="twelve columns" id="top"><!--Start of top information area-->
    <ul>
      <li><a href="sitemap/">Sitemap</a></li>
      <li><a href="folder/">Another link</a></li>
    </ul>
  </nav><!--End of top information area-->

  <h1 style="background: orange; margin: 0; padding: 0;">Website Title</h1>

  <h2 style="background: green; margin: 0; padding: 0;">Website Byline</h2>

  <nav id="nav-main" role="navigation" style="background: cyan;">
    <ul>
      <li>Link 1</li>
      <li>Link 2</li>
      <li>Link 3</li>
      <li>Link 4</li>
      <li>Link 5</li>
      <li>Link 6</li>
      <li>Link 7</li>
      <li>Link 8</li>
      <li>Link 9</li>
      <li>Link 10</li>
    </ul>
  </nav>
</header>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <!--Container for ALL content, everything inside this--><main class="container" role="main" style="background: blue; color: white;">
    <p>Container begins</p>

    <div class="">
      <article role="article" style="background: orange;">
        <h1 role="heading">Header for article (page content)</h1>

        <section style="background: yellow; color: black;">
          <h1>Header for section within article</h1>

          <p>Content for section</p>

          <ul role="list">
            <li role="listitem">Hey there. <code>This is a code snippet</code>
              <ul role="list">
                <li role="listitem">Hey I'm embedded</li>
              </ul>
            </li>
          </ul>

          <table summary="">
            <thead>
              <tr>
                <th scope="col">Hey it's table time</td>
                <th scope="col">I'm the second column header</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">I'm the first cell in the table body</td>
              </tr>
            </tbody>
          </table>
        </section>

        <div class="four columns" style="background: green">
          <p>Hey</p>
        </div>

        <div class="three columns" style="background: green">
          <p>Hey</p>
        </div>

        <div class="four columns u-pull-right">
          <section style="background: purple;">
            <p>This area doesn't want to be part of the main article area! Behold u-pull-right.</p>
          </section>
        </div>
      </article>
    </div>
  </main>

    <footer>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="events/">Events</a></li>
      <li><a href="diary/">Diary</a></li>
      <li><a href="news/">News</a></li>
      <li><a href="videos/">Videos</a></li>
      <li><a href="admin/">Admin</a></li>
      <li><a href="findus/">Find Us</a></li>
    </ul>

    <br />

    <div role="contentinfo"><!--Copyright info etc-->
      <p><strong>&copy; <?php echo date('Y'); ?> Arun Sunshine Group | Designed by <a href="http://www.paulcomputerhelp.co.uk/">Paul Robinson</a></strong><br />

      <br />
      <br />

      <a href="perch/">Perch Login</a></p>
    </div>

    <br />
    <br />
    <br />
  </footer>

<script>
  // DELETE THIS IF NOT NEEDED ON THIS PAGE
  // fix for mobile table layout from http://sitesforprofit.com/responsive-tables-in-wordpress

  var headertext = [];
  var headers = document.querySelectorAll("thead");
  var tablebody = document.querySelectorAll("tbody");

  for (var i = 0; i < headers.length; i++) {
    headertext[i]=[];
    for (var j = 0, headrow; headrow = headers[i].rows[0].cells[j]; j++) {
      var current = headrow;
      headertext[i].push(current.textContent);
      }
  }

  for (var h = 0, tbody; tbody = tablebody[h]; h++) {
    for (var i = 0, row; row = tbody.rows[i]; i++) {
      for (var j = 0, col; col = row.cells[j]; j++) {
        col.setAttribute("data-th", headertext[h][j]);
      }
    }
  }
</script>
<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
