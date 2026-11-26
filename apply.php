<?php
$page_title = 'Apply | Reel House';
$page_desc  = 'Apply to join the Reel House team.';
$cta_label  = 'Book a free call';
$page_css   = <<<'CSS'
  legend small{font-weight:400;color:var(--muted)}
CSS;
include "header.inc";
?>
<header>
  <div class="wrap">
    <?php include "nav.inc"; ?>
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
      <form id="apply-form" action="https://mercury.swin.edu.au/it000000/formtest.php" method="post">

      <p>
        <label for="jobref">Job reference number</label>
        <input type="text" id="jobref" name="jobref"
               maxlength="5" pattern="[A-Za-z0-9]{5}"
               title="Exactly 5 alphanumeric characters" required>
      </p>

      <p>
        <label for="firstname">First name</label>
        <input type="text" id="firstname" name="firstname"
               maxlength="20" pattern="[A-Za-z]{1,20}"
               title="Maximum 20 alpha characters (letters only)" required>
      </p>

      <p>
        <label for="lastname">Last name</label>
        <input type="text" id="lastname" name="lastname"
               maxlength="20" pattern="[A-Za-z]{1,20}"
               title="Maximum 20 alpha characters (letters only)" required>
      </p>

      <p>
        <label for="dob">Date of birth</label>
        <input type="text" id="dob" name="dob"
               placeholder="dd/mm/yyyy" maxlength="10"
               pattern="(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[0-2])/(19|20)[0-9]{2}"
               title="Use the format dd/mm/yyyy" required>
      </p>

      <fieldset>
        <legend>Gender</legend>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>

        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>

        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
      </fieldset>

      <p>
        <label for="street">Street address</label>
        <input type="text" id="street" name="street" maxlength="40" required>
      </p>

      <p>
        <label for="suburb">Suburb/Town</label>
        <input type="text" id="suburb" name="suburb" maxlength="40" required>
      </p>

      <p>
        <label for="state">State</label>
        <select id="state" name="state" required>
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
        <input type="text" id="postcode" name="postcode"
               maxlength="4" pattern="[0-9]{4}" inputmode="numeric"
               title="Exactly 4 digits" required>
      </p>

      <p>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </p>

      <p>
        <label for="phone">Phone number</label>
        <input type="tel" id="phone" name="phone"
               maxlength="12" pattern="[0-9]{8,12}"
               title="8 to 12 digits" required>
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

<?php include "footer.inc"; ?>
