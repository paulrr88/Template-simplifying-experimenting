
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

  <!--<link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet"><!--Bench Nine Google Font for headers-->
</head>

<body>

  <header id="banner" role="banner"><!--Start of header area containing website title, graphics and navigation etc-->
    <nav id="top" role="navigation"><!--Start of top information area-->
      <ul>
        <li><a href="sitemap/">Sitemap</a></li>
        <li><a href="folder/">Another link</a></li>
      </ul>
    </nav><!--End of top information area-->

    <h1 class="centre">Website Title</h1>

    <h2 class="centre">Website Byline</h2>

    <nav id="nav-main" role="navigation"><!--Main navigation start-->
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
    </nav><!--Main navigation ends-->
  </header><!--Header area ends-->

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <main class="container" role="main" style="background: blue; color: white;"><!--Container for ALL content, everything inside this-->
      <p>Container begins</p>

      <div class="">
        <article role="article" style="background: orange;">
          <h1 role="heading">Header for article (page content)</h1>

          <section style="background: yellow; color: black;">
            <h2>Header for section within article</h2>

            <p>Content for section</p>

            <h3>Header 3</h3>

            <h4>Header 4</h4>

            <h5>Header 5</h5>

            <h6>Header 6</h6>

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
                  <td>I'm the first cell in the table body gosh I have a lot of text</td>
                  <td>I'm the second</td>
                </tr>
              </tbody>
            </table>

            <figure class="width-50">
              <img
                alt="Photo of a bunny"
                class="fluid-100"
                role="img"
                src="https://s-media-cache-ak0.pinimg.com/736x/0a/8b/91/0a8b91f0bfbbcbc65fb7d43cd9ff4c78.jpg"
                title="Bunny Rabbit by Photographer"
              >
              <figcaption>Hey this is a caption for the above image</figcaption>
            </figure>

            <figure class="fluid-images-3 margin-4" style="background: magenta;">
              <img
                alt="Photo of a bunny"
                class=""
                role="img"
                src="https://s-media-cache-ak0.pinimg.com/736x/0a/8b/91/0a8b91f0bfbbcbc65fb7d43cd9ff4c78.jpg"
                title="Bunny Rabbit by Photographer"
              >
              <img
                alt="Photo of a bunny"
                class=""
                role="img"
                src="https://s-media-cache-ak0.pinimg.com/736x/0a/8b/91/0a8b91f0bfbbcbc65fb7d43cd9ff4c78.jpg"
                title="Bunny Rabbit by Photographer"
              >
              <img
                alt="Photo of a bunny"
                class=""
                role="img"
                src="https://s-media-cache-ak0.pinimg.com/736x/0a/8b/91/0a8b91f0bfbbcbc65fb7d43cd9ff4c78.jpg"
                title="Bunny Rabbit by Photographer"
              >
              <figcaption class="centre padding-3-left padding-3-right">Hey this is a caption for the above images plural. To add another image, just change it to fluid-xx depending on how many images (divided up into 100 or whatever width the figure container is). Obviously adjustments need to be made if padding and margins are needed</figcaption>
            </figure>
          </section>

          <div class="four columns" style="background: green">
            <p>Four columns</p>
          </div>

          <div class="three columns" style="background: green">
            <p>Three columns</p>


          </div>

          <div class="four columns u-pull-right">
            <section style="background: purple;">
              <p>This area doesn't want to be part of the main article area! Behold u-pull-right.</p>
            </section>
          </div>
        </article>
      </div>

      <p class="clear">End of container</p>
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
