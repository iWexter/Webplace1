
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=640">

    <link rel="stylesheet" href="stylesheets/core.css" media="screen">
    <link rel="stylesheet" href="stylesheets/mobile.css" media="handheld, only screen and (max-device-width:640px)">
    <link rel="stylesheet" href="stylesheets/github-light.css">

    <script type="text/javascript" src="javascripts/modernizr.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="javascripts/headsmart.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $('#main_content').headsmart()
      })
    </script>
    <title>Bitso VS6 by iWexter</title>
  </head>

  <body>
    <a id="forkme_banner" href="https://github.com/iWexter/Webplace1">View on GitHub</a>
    <div class="shell">
      <h1>

      </h1>
      

      <header>
        <span class="ribbon-outer">
          <span class="ribbon-inner">
            <h1>Primerita uwu</h1>
            <h2>Azure first try</h2>
          </span>
          <span class="left-tail"></span>
          <span class="right-tail"></span>
        </span>
      </header>

      <section id="downloads">
        <span class="inner">
          <a href="https://github.com/iWexter/Webplace1/zipball/master" class="zip"><em>download</em> .ZIP</a><a href="https://github.com/iWexter/Webplace1/tarball/master" class="tgz"><em>download</em> .TGZ</a>
        </span>
      </section>


      <span class="banner-fix"></span>


      <section id="main_content">
        <h3>
<a id="welcome-to-github-pages" class="anchor" href="#welcome-to-github-pages" aria-hidden="true"><span class="octicon octicon-link"></span></a>Welcome to GitHub Pages.</h3>
<br>
<br>
<br>
<?php
$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$sql = "SELECT * FROM usuarios";
$result = $link->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id_usuario"]. " - Name: " . $row["usu_nombrecompleto"]. " <br>";
  }
} else {
  echo "0 results";
}
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
echo "$connectstr_dbname";

mysqli_close($link);
?>
<br>
<br>
<br>
<br>

<p>This automatic page generator is the easiest way to create beautiful pages for all of your projects. Author your page content here <a href="https://guides.github.com/features/mastering-markdown/">using GitHub Flavored Markdown</a>, select a template crafted by a designer, and publish. After your page is generated, you can check out the new <code>gh-pages</code> branch locally. If you’re using GitHub Desktop, simply sync your repository and you’ll see the new branch.


<?php
echo "My first PHP script! jeje";
?></p>

<h3>
<a id="designer-templates" class="anchor" href="#designer-templates" aria-hidden="true"><span class="octicon octicon-link"></span></a>Designer Templates</h3>

<p>We’ve crafted some handsome templates for you to use. Go ahead and click 'Continue to layouts' to browse through them. You can easily go back to edit your page before publishing. After publishing your page, you can revisit the page generator and switch to another theme. Your Page content will be preserved.</p>

<h3>
<a id="creating-pages-manually" class="anchor" href="#creating-pages-manually" aria-hidden="true"><span class="octicon octicon-link"></span></a>Creating pages manually</h3>

<p>If you prefer to not use the automatic generator, push a branch named <code>gh-pages</code> to your repository to create a page manually. In addition to supporting regular HTML content, GitHub Pages support Jekyll, a simple, blog aware static site generator. Jekyll makes it easy to create site-wide headers and footers without having to copy them across every page. It also offers intelligent blog support and other advanced templating features.</p>

<p>Authors and Contributors
You can <a href="https://github.com/blog/821" class="user-mention">@mention</a> a GitHub username to generate a link to their profile. The resulting <code>&lt;a&gt;</code> element will link to the contributor’s GitHub Profile. For example: In 2007, Chris Wanstrath (<a href="https://github.com/defunkt" class="user-mention">@defunkt</a>), PJ Hyett (<a href="https://github.com/pjhyett" class="user-mention">@pjhyett</a>), and Tom Preston-Werner (<a href="https://github.com/mojombo" class="user-mention">@mojombo</a>) founded GitHub.</p>

<p>Miau Miau</p>

<h3>
<a id="support-or-contact" class="anchor" href="#support-or-contact" aria-hidden="true"><span class="octicon octicon-link"></span></a>Support or Contact</h3>

<p>Having trouble with Pages? Check out our <a href="https://help.github.com/pages">documentation</a> or <a href="https://github.com/contact">contact support</a> and we’ll help you sort it out.</p>
      </section>

      <footer>
        <span class="ribbon-outer">
          <span class="ribbon-inner">
            <p>this project by <a href="https://github.com/iWexter">iWexter</a> can be found on <a href="https://github.com/iWexter/Webplace1">GitHub</a></p>
          </span>
          <span class="left-tail"></span>
          <span class="right-tail"></span>
        </span>
        <p>Generated with <a href="https://pages.github.com">GitHub Pages</a> using Merlot</p>
        <span class="octocat"></span>
      </footer>

    </div>

    
  </body>
</html>
