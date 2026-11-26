<?php
$page_title = 'Reel House | Digital media agency';
$page_desc  = 'Reel House plans, shoots, edits and promotes short video and social campaigns for brands in Vietnam and Southeast Asia.';
$body_class = 'home';
$cta_label  = 'Book a free call';
$page_css   = <<<'CSS'
  .hero-img{display:block;max-width:100%;height:auto;margin-top:32px}
CSS;
include "header.inc";
?>
<header>
  <div class="wrap">
    <?php include "nav.inc"; ?>
<div class="hero">
      <div>
        <h1>Content people finish watching.</h1>
        <p>We plan, shoot, edit and promote short video and social campaigns for brands in Vietnam and across Southeast Asia.</p>
        <div class="hero-actions">
          <a class="btn" href="apply.php">Start a project</a>
          <a class="text" href="#work">See our work</a>
        </div>
        <img class="hero-img" src="images/hero-reel.svg" alt="Illustration of a film reel and a clapperboard" width="320" height="180">
      </div>
      <div class="phone" aria-label="Example campaign result">
        <div class="bars"><i></i><i></i><i></i></div>
        <div class="who">Cà Phê Nhà · TikTok launch</div>
        <div class="big">+312%</div>
        <div class="cap">Video views in 60 days</div>
      </div>
    </div>
  
  </div>
</header>
<div class="strip" aria-hidden="true">
  <div>
    <span>TikTok</span><span>YouTube</span><span>Instagram</span><span>Facebook</span><span>LinkedIn</span><span>Zalo</span>
    <span>TikTok</span><span>YouTube</span><span>Instagram</span><span>Facebook</span><span>LinkedIn</span><span>Zalo</span>
  </div>
</div>

<main>
<section id="work">
  <div class="wrap">
    <h2>Recent work, told in stories</h2>
    <p class="lead">Every project starts with a goal and ends with a number. Here are three.</p>
    <input type="radio" name="platform" id="p-tt" class="sr" checked aria-label="TikTok">
    <input type="radio" name="platform" id="p-ig" class="sr" aria-label="Instagram">
    <input type="radio" name="platform" id="p-yt" class="sr" aria-label="YouTube">
    <div class="tabs">
      <label class="tab" for="p-tt"><span>TikTok</span></label>
      <label class="tab" for="p-ig"><span>Instagram</span></label>
      <label class="tab" for="p-yt"><span>YouTube</span></label>
    </div>
    <div class="stories set set-tt">
      <article class="story" tabindex="0">
        <small>Cà Phê Nhà</small>
        <div class="stat">+312%</div>
        <h3>Video views</h3>
        <p>A 12-part TikTok series following one coffee order from farm to cup.</p>
        <div class="hint">Hover or tap for details</div>
        <div class="back">
          <h3>What we did</h3>
          <ul>
          <li>Scripted and shot 12 episodes</li>
          <li>Posted four times a week</li>
          <li>Replied to every comment in 24 hours</li>
          </ul>
        </div>
      </article>
      <article class="story" tabindex="0">
        <small>FitBox Vietnam</small>
        <div class="stat">4.8x</div>
        <h3>Return on ad spend</h3>
        <p>New short-form ad creative tested weekly across Facebook and Instagram.</p>
        <div class="hint">Hover or tap for details</div>
        <div class="back">
          <h3>What we did</h3>
          <ul>
          <li>Tested 18 ad variations</li>
          <li>Moved budget to the top three</li>
          <li>Reported results every Friday</li>
          </ul>
        </div>
      </article>
      <article class="story" tabindex="0">
        <small>Saigon Stay Hotels</small>
        <div class="stat">92k</div>
        <h3>New followers</h3>
        <p>A rebranded Instagram feed with Reels shot on location in three cities.</p>
        <div class="hint">Hover or tap for details</div>
        <div class="back">
          <h3>What we did</h3>
          <ul>
          <li>New grid, colors and captions</li>
          <li>Reels filmed in three cities</li>
          <li>Daily story replies and polls</li>
          </ul>
        </div>
      </article>
    </div>
    <div class="stories set set-ig">
      <article class="story" tabindex="0">
        <small>Bloom Skincare</small>
        <div class="stat">+180%</div>
        <h3>Saves per post</h3>
        <p>Carousel tutorials that people kept and shared with friends.</p>
        <div class="hint">Hover or tap for details</div>
        <div class="back">
          <h3>What we did</h3>
          <ul>
          <li>Designed 30 tutorial carousels</li>
          <li>Wrote captions in Vietnamese and English</li>
          <li>Tracked saves weekly</li>
          </ul>
        </div>
      </article>
      <article class="story" tabindex="0">
        <small>Vespa Saigon Tours</small>
        <div class="stat">2.1M</div>
        <h3>Reel plays</h3>
        <p>Street-food ride-alongs filmed from the passenger seat.</p>
        <div class="hint">Hover or tap for details</div>
        <div class="back">
          <h3>What we did</h3>
          <ul>
          <li>Filmed 15 Reels in two days</li>
          <li>Added local-language subtitles</li>
          <li>Tagged every vendor featured</li>
          </ul>
        </div>
      </article>
      <article class="story" tabindex="0">
        <small>Saigon Stay Hotels</small>
        <div class="stat">92k</div>
        <h3>New followers</h3>
        <p>A rebranded feed with Reels shot on location in three cities.</p>
        <div class="hint">Hover or tap for details</div>
        <div class="back">
          <h3>What we did</h3>
          <ul>
          <li>New grid, colors and captions</li>
          <li>Reels filmed in three cities</li>
          <li>Daily story replies and polls</li>
          </ul>
        </div>
      </article>
    </div>
    <div class="stories set set-yt">
      <article class="story" tabindex="0">
        <small>TechNest Vietnam</small>
        <div class="stat">150k</div>
        <h3>Subscribers in a year</h3>
        <p>A weekly review series with a format viewers can rely on.</p>
        <div class="hint">Hover or tap for details</div>
        <div class="back">
          <h3>What we did</h3>
          <ul>
          <li>Set one upload day every week</li>
          <li>Designed a repeatable thumbnail style</li>
          <li>Added chapters to every video</li>
          </ul>
        </div>
      </article>
      <article class="story" tabindex="0">
        <small>Học Tiếng Anh Nhanh</small>
        <div class="stat">8:42</div>
        <h3>Average watch time</h3>
        <p>Ten-minute lessons edited to remove every slow moment.</p>
        <div class="hint">Hover or tap for details</div>
        <div class="back">
          <h3>What we did</h3>
          <ul>
          <li>Cut each lesson to the key points</li>
          <li>Opened with the answer, not an intro</li>
          <li>Linked the next lesson at the end</li>
          </ul>
        </div>
      </article>
      <article class="story" tabindex="0">
        <small>Green Bowl Kitchen</small>
        <div class="stat">3.4x</div>
        <h3>Channel traffic</h3>
        <p>Recipe videos with chapters and a pinned shopping list.</p>
        <div class="hint">Hover or tap for details</div>
        <div class="back">
          <h3>What we did</h3>
          <ul>
          <li>Filmed 24 recipes in one week</li>
          <li>Pinned an ingredient list to each</li>
          <li>Sent viewers to the online shop</li>
          </ul>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="services" id="services">
  <div class="wrap">
    <h2>What we make</h2>
    <p class="lead" style="max-width:60ch">Pick one service or combine them. Open a row to see what is included.</p>
    <div class="list">
      <details open>
        <summary>Short-form video</summary>
        <p>Scripts, filming, editing and captions for TikTok, Reels and YouTube Shorts. We deliver a month of content in one shoot day.</p>
      </details>
      <details>
        <summary>Social media management</summary>
        <p>Content calendar, daily posting, community replies and a monthly report that shows what worked.</p>
      </details>
      <details>
        <summary>Paid ads</summary>
        <p>Campaign setup, creative testing and budget tuning on Meta, TikTok and Google.</p>
      </details>
      <details>
        <summary>Branding and web design</summary>
        <p>Logo, colors, tone of voice and a fast website that matches your social content.</p>
      </details>
    </div>
  </div>
</section>

<section class="pricing" id="pricing">
  <div class="wrap">
    <h2>Clear monthly prices</h2>
    <p class="lead">No hidden fees. Cancel with 30 days' notice.</p>
    <div class="plans">
      <div class="plan">
        <h3>Starter</h3>
        <div class="price">$490<small>/month</small></div>
        <p>For small brands starting on one platform.</p>
        <ul><li>8 short videos</li><li>1 platform</li><li>Monthly report</li></ul>
        <a class="btn" href="apply.php">Choose Starter</a>
      </div>
      <div class="plan pop">
        <span class="badge">Most popular</span>
        <h3>Growth</h3>
        <div class="price">$1,290<small>/month</small></div>
        <p>For brands ready to post every week.</p>
        <ul><li>20 short videos</li><li>3 platforms</li><li>Paid ads setup</li><li>Biweekly call</li></ul>
        <a class="btn" href="apply.php">Choose Growth</a>
      </div>
      <div class="plan">
        <h3>Studio</h3>
        <div class="price">$2,900<small>/month</small></div>
        <p>A full content team on your side.</p>
        <ul><li>40 videos and 1 shoot day</li><li>All platforms</li><li>Ads management</li><li>Weekly strategy call</li></ul>
        <a class="btn" href="apply.php">Choose Studio</a>
      </div>
    </div>
  </div>
</section>


<section id="compare" aria-labelledby="compare-title">
  <div class="wrap">
    <h2 id="compare-title">Compare the plans</h2>
    <p class="lead">Everything in one table, so you can see what changes as you grow.</p>
    <div class="table-wrap">
      <table class="interests">
        <caption>What each monthly plan includes</caption>
        <thead>
          <tr>
            <th scope="col" rowspan="2">Feature</th>
            <th scope="colgroup" colspan="3">Plan</th>
          </tr>
          <tr>
            <th scope="col">Starter</th>
            <th scope="col">Growth</th>
            <th scope="col">Studio</th>
          </tr>
        </thead>
        <tbody>
          <tr><th scope="row">Short videos per month</th><td>8</td><td>20</td><td>40</td></tr>
          <tr><th scope="row">Platforms</th><td>1</td><td>3</td><td>All</td></tr>
          <tr><th scope="row">Paid ads</th><td>Not included</td><td>Setup</td><td>Full management</td></tr>
          <tr><th scope="row">Calls with our team</th><td>None</td><td>Biweekly</td><td>Weekly</td></tr>
          <tr><th scope="row">Monthly report</th><td colspan="3">Included in every plan</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="contact" id="source" aria-labelledby="source-title">
  <div class="wrap">
    <h2 id="source-title">See how this site is built</h2>
    <p class="lead" style="color:#e6f2ec;max-width:60ch">Reel House is a student project by The Axis. The full source code, history and database file are on GitHub.</p>
    <p><a class="btn" href="https://github.com/Eruth1/The-axis-project" target="_blank" rel="noopener">View the project on GitHub</a></p>
  </div>
</section>
</main>

<a class="btn sticky-cta" href="apply.php">Book a free call</a>

<?php include "footer.inc"; ?>
