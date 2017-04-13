<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Page Title &mdash; Organisation Title</title>
  <meta name="description" content="">

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


<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
