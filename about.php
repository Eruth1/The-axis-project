<?php
require_once "settings.php";

function e($text)
{
    return htmlspecialchars($text, ENT_QUOTES, "UTF-8");
}

mysqli_report(MYSQLI_REPORT_OFF);
$members = [];
$conn    = @mysqli_connect($host, $user, $pwd, $sql_db);

if ($conn) {
    mysqli_set_charset($conn, "utf8mb4");
    $stmt = mysqli_prepare($conn, "SELECT * FROM about ORDER BY display_order, member_id");
    if ($stmt && mysqli_stmt_execute($stmt)) {
        $members = mysqli_fetch_all(mysqli_stmt_get_result($stmt), MYSQLI_ASSOC);
    }
    mysqli_close($conn);
}

$page_title = "About us | Reel House";
$page_desc  = "About the team behind the Reel House website";
$cta_label  = "Book a free call";
$page_css   = <<<'CSS'
  /* Centre the caption under the group photo */
  .group-photo figcaption {
    text-align: center;
    font-style: italic;
  }
  /* Make the interests table caption stand out */
  .interests caption {
    font-weight: 700;
    padding-bottom: 0.5em;
  }
CSS;
include "header.inc";
?>
<header>
  <div class="wrap">
    <?php include "nav.inc"; ?>
    <div class="hero">
      <div>
        <h1>The team behind the reel.</h1>
        <p>We are a student group who designed and built this website. Here is who we are and what each of us did.</p>
        <div class="hero-actions">
          <a class="btn" href="#contributions">See who did what</a>
          <a class="text" href="#email">Get in touch</a>
        </div>
      </div>
      <div class="phone" role="group" aria-label="Team summary">
        <div class="bars"><i></i><i></i><i></i></div>
        <div class="who">The Axis · Web Technology Project</div>
        <div class="big"><?= count($members) ?: 4 ?></div>
        <div class="cap">students, one website</div>
      </div>
    </div>
  </div>
</header>

<div class="strip" aria-hidden="true">
  <div>
    <span>PHP</span><span>MySQL</span><span>Security</span><span>Accessibility</span><span>Teamwork</span><span>Testing</span>
    <span>PHP</span><span>MySQL</span><span>Security</span><span>Accessibility</span><span>Teamwork</span><span>Testing</span>
  </div>
</div>

<main>
  <section id="group">
    <div class="wrap about-grid">
      <div>
        <h2>Group Information</h2>
        <ul class="info">
          <li>Group name: <strong>The Axis</strong></li>
          <li>Class
            <ul>
              <li>Day: Thursday</li>
              <li>Time: 7:00 AM - 10:00 AM</li>
            </ul>
          </li>
          <li>Tutor: <strong>Trung Doan</strong></li>
          <li>Course: <strong>2026-HX09-COS10026-Web Technology Project (Swinburne Vietnam)</strong></li>
          <li>Student IDs
            <ul class="ids">
<?php foreach ($members as $m) { ?>
              <li><?= e($m["full_name"]) ?>: <?= e($m["student_id"]) ?></li>
<?php } ?>
            </ul>
          </li>
        </ul>
      </div>
      <figure class="group-photo">
        <img src="images/group-photo.jpg" alt="Photo of The Axis group members" width="480" height="263">
        <figcaption>The Axis team, 2026</figcaption>
      </figure>
    </div>
  </section>
<?php if (!$members) { ?>

  <section id="contributions">
    <div class="wrap">
      <h2>Behind the scenes</h2>
      <p class="lead">The team details could not be loaded right now. Please try again in a few minutes.</p>
    </div>
  </section>
<?php } else { ?>

  <section class="services" id="contributions">
    <div class="wrap">
      <h2>Behind the scenes</h2>
      <p class="lead" style="max-width:60ch">Each member owned one part of the site in each stage of the project and reviewed the others.</p>
      <dl class="roles">
<?php foreach ($members as $m) { ?>
        <div class="role"><dt><?= e($m["full_name"]) ?></dt>
          <dd><strong>Part 1:</strong> <?= e($m["part1_contribution"]) ?></dd>
          <dd><strong>Part 2:</strong> <?= e($m["part2_contribution"]) ?></dd>
          <dd class="quote"><q lang="vi"><?= e($m["quote_vi"]) ?></q> <span class="translation">"<?= e($m["quote_en"]) ?>"</span></dd></div>
<?php } ?>
      </dl>
    </div>
  </section>

  <section id="interests">
    <div class="wrap">
      <h2>What we are into</h2>
      <p class="lead">A few things about us outside class.</p>
      <div class="table-wrap">
        <table class="interests">
          <caption>Members' interests</caption>
          <thead>
            <tr>
              <th scope="col">Member</th>
              <th scope="col">Hometown</th>
              <th scope="col">Programming background</th>
              <th scope="col" colspan="2">Favourite books, films</th>
            </tr>
          </thead>
          <tbody>
<?php foreach ($members as $m) { ?>
            <tr>
              <th scope="row"><?= e($m["full_name"]) ?></th>
              <td><?= e($m["hometown"]) ?></td>
              <td><?= e($m["programming_background"]) ?></td>
              <td><?= e($m["favourite_book"]) ?></td>
              <td><?= e($m["favourite_film"]) ?></td>
            </tr>
<?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="contact" id="email">
    <div class="wrap">
      <h2>Get in touch with us</h2>
      <ul class="emails">
<?php foreach ($members as $m) { ?>
        <li><a href="https://mail.google.com/mail/u/0/?to=<?= e(urlencode($m["email"])) ?>&amp;fs=1&amp;tf=cm" target="_blank" rel="noopener"><?= e($m["full_name"]) ?></a></li>
<?php } ?>
      </ul>
    </div>
  </section>
<?php } ?>
</main>

<?php include "footer.inc"; ?>
