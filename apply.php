<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Apply | Reel House</title>
<link rel="stylesheet" href="styles.css">
<!-- Embedded CSS: rules used only on the application form -->
<style>
  legend small{font-weight:400;color:var(--muted)}
</style>
</head>
<body>
<input type="checkbox" id="dark" class="sr" aria-label="Dark mode">
<div class="progress" aria-hidden="true"></div>

<header>
  <div class="wrap">
    <nav>
      <a class="logo" href="index.html"><img src="logo.svg" alt="" width="32" height="32">Reel House</a>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="index.html#work">Work</a></li>
        <li><a href="index.html#services">Services</a></li>
        <li><a href="index.html#pricing">Pricing</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="jobs.html">Jobs</a></li>
        <li><a href="apply.html" aria-current="page">Apply</a></li>
      </ul>
      <div class="nav-right">
        <label class="toggle" for="dark" title="Switch dark mode"><span class="sr">Toggle dark mode</span></label>
        <a class="btn" href="apply.html">Book a free call</a>
      </div>
    </nav>

    <form class="search" role="search" action="index.html">
    <label class="sr" for="site-search">Search the site</label>
    <input type="search" id="site-search" name="q" placeholder="Search work, pricing, jobs..." list="search-list" autocomplete="off">
    <datalist id="search-list"></datalist>
    <button class="btn" type="submit">Search</button>
    <span class="search-msg" role="status" aria-live="polite"></span>
    </form>

    <div class="about1">
      <h1>Join the reel.</h1>
      <p>Tell us about yourself and the skills you bring. We reply within one working day.</p>
    </div>
  </div>
</header>

<main>
  <section class="contact" id="contact">
    <div class="wrap grid">
      <div>
        <h2>Apply to join the team</h2>
        <p class="lead" style="color:#e6f2ec">Use the job reference number from the Jobs page and fill in every required field.</p>
      </div>
      <form id="apply-form" action="process_eoi.php" method="post" novalidate>

      <p>
        <label for="jobref">Job reference number</label>
        <input type="text" id="jobref" name="jobref">
      </p>

      <p>
        <label for="firstname">First name</label>
        <input type="text" id="firstname" name="firstname">
      </p>

      <p>
        <label for="lastname">Last name</label>
        <input type="text" id="lastname" name="lastname">
      </p>

      <p>
        <label for="dob">Date of birth</label>
        <input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy">
      </p>

      <fieldset>
        <legend>Gender</legend>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>

        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>

        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
      </fieldset>

      <p>
        <label for="street">Street address</label>
        <input type="text" id="street" name="street">
      </p>

      <p>
        <label for="suburb">Suburb/Town</label>
        <input type="text" id="suburb" name="suburb">
      </p>

      <p>
        <label for="state">State</label>
        <select id="state" name="state">
          <option value="">Please select</option>
          <option value="VIC">VIC</option>
          <option value="NSW">NSW</option>
          <option value="QLD">QLD</option>
          <option value="NT">NT</option>
          <option value="WA">WA</option>
          <option value="SA">SA</option>
          <option value="TAS">TAS</option>
          <option value="ACT">ACT</option>
        </select>
      </p>
      <p>
        <label for="postcode">Postcode</label>
        <input type="text" id="postcode" name="postcode">
      </p>

      <p>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
      </p>

      <p>
        <label for="phone">Phone number</label>
        <input type="text" id="phone" name="phone">
      </p>

      <fieldset>
        <legend>Skill list <small>(choose at least one)</small></legend>
        <input type="checkbox" id="html" name="skills[]" value="HTML">
        <label for="html">HTML</label>

        <input type="checkbox" id="css" name="skills[]" value="CSS">
        <label for="css">CSS</label>

        <input type="checkbox" id="javascript" name="skills[]" value="JavaScript">
        <label for="javascript">JavaScript</label>

        <input type="checkbox" id="sql" name="skills[]" value="SQL">
        <label for="sql">SQL</label>
      </fieldset>

      <p>
        <label for="otherskills">Other skills</label><br>
        <textarea id="otherskills" name="otherskills" rows="5" cols="40"></textarea>
      </p>

      <p class="actions">
        <input class="btn" type="submit" value="Apply">
        <input class="btn btn-ghost" type="reset" value="Reset">
      </p>
    </form>
    </div>
  </section>
</main>

<footer>
  <div class="wrap">
    <p>COS10011/COS60004/COS60007 CWA</p>
    <p>&#169; Swinburne University of Technology</p>
    <p>Group Lab - Task 1</p>
    <p><a href="https://axis-project.atlassian.net/jira/software/projects/AXIS/boards/1" target="_blank" rel="noopener">Jira project board</a></p>
    <p><a href="https://github.com/Eruth1/The-axis-project" target="_blank" rel="noopener">https://github.com/Eruth1/The-axis-project</a></p>
    <p><a href="mailto:thanhntfsc0262@fpt.edu.vn">thanhntfsc0262@fpt.edu.vn</a></p>
    <p class="acknowledgement">We acknowledge the Traditional Custodians of the lands on which Swinburne University of Technology operates, the Wurundjeri Woi-wurrung people of the Kulin Nation, and pay our respects to Elders past and present. <a href="jobs.html#inclusion">Read our commitment to Aboriginal and Torres Strait Islander peoples</a>.</p>
  </div>
</footer>

</body>
</html>
