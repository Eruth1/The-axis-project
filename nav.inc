<nav>
  <a class="logo" href="index.php"><img src="images/logo.svg" alt="" width="32" height="32">Reel House</a>
  <ul>
    <li><a href="index.php"<?= $cur("index.php") ?>>Home</a></li>
    <li><a href="index.php#work">Work</a></li>
    <li><a href="index.php#services">Services</a></li>
    <li><a href="index.php#pricing">Pricing</a></li>
    <li><a href="about.php"<?= $cur("about.php") ?>>About</a></li>
    <li><a href="jobs.php"<?= $cur("jobs.php") ?>>Jobs</a></li>
    <li><a href="apply.php"<?= $cur("apply.php") ?>>Apply</a></li>
  </ul>
  <div class="nav-right">
    <label class="toggle" for="dark" title="Switch dark mode"><span class="sr">Toggle dark mode</span></label>
    <a class="btn" href="apply.php"><?= htmlspecialchars($cta_label) ?></a>
  </div>
</nav>
