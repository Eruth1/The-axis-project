<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["jobref"])) {
    header("Location: apply.php");
    exit();
}


function sanitise_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function get_field($name) {
    return isset($_POST[$name]) ? sanitise_input($_POST[$name]) : "";
}

$jobref      = get_field("jobref");
$firstname   = get_field("firstname");
$lastname    = get_field("lastname");
$dob         = get_field("dob");
$gender      = get_field("gender");
$street      = get_field("street");
$suburb      = get_field("suburb");
$state       = get_field("state");
$postcode    = get_field("postcode");
$email       = get_field("email");
$phone       = get_field("phone");
$otherskills = get_field("otherskills");


$skills = [];
if (isset($_POST["skills"]) && is_array($_POST["skills"])) {
    foreach ($_POST["skills"] as $skill) {
        $skills[] = sanitise_input($skill);
    }
}


$errors = [];

if ($jobref === "") {
    $errors[] = "Job reference number is required.";
} elseif (!preg_match("/^[A-Za-z0-9]{5}$/", $jobref)) {
    $errors[] = "Job reference number must be exactly 5 letters or digits.";
}

if ($firstname === "") {
    $errors[] = "First name is required.";
} elseif (!preg_match("/^[A-Za-z]{1,20}$/", $firstname)) {
    $errors[] = "First name must be letters only, maximum 20 characters.";
}

if ($lastname === "") {
    $errors[] = "Last name is required.";
} elseif (!preg_match("/^[A-Za-z]{1,20}$/", $lastname)) {
    $errors[] = "Last name must be letters only, maximum 20 characters.";
}


$dob_for_db = "";
if ($dob === "") {
    $errors[] = "Date of birth is required.";
} elseif (!preg_match("/^(\d{2})\/(\d{2})\/(\d{4})$/", $dob, $parts)) {
    $errors[] = "Date of birth must use the format dd/mm/yyyy.";
} else {
    $day   = (int)$parts[1];
    $month = (int)$parts[2];
    $year  = (int)$parts[3];
    if (!checkdate($month, $day, $year)) {
        $errors[] = "Date of birth is not a real date.";
    } else {
        $dob_for_db = sprintf("%04d-%02d-%02d", $year, $month, $day); 
        if ($dob_for_db > date("Y-m-d")) {
            $errors[] = "Date of birth cannot be in the future.";
        }
    }
}

$allowed_genders = ["female", "male", "other"];
if (!in_array($gender, $allowed_genders, true)) {
    $errors[] = "Please select a gender.";
}

if ($street === "") {
    $errors[] = "Street address is required.";
} elseif (strlen($street) > 40) {
    $errors[] = "Street address must be 40 characters or fewer.";
}

if ($suburb === "") {
    $errors[] = "Suburb/Town is required.";
} elseif (strlen($suburb) > 40) {
    $errors[] = "Suburb/Town must be 40 characters or fewer.";
}

$allowed_states = ["VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT"];
if (!in_array($state, $allowed_states, true)) {
    $errors[] = "Please select a valid state.";
}

if ($postcode === "") {
    $errors[] = "Postcode is required.";
} elseif (!preg_match("/^\d{4}$/", $postcode)) {
    $errors[] = "Postcode must be exactly 4 digits.";
}

if ($email === "") {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 100) {
    $errors[] = "Email address is not valid.";
}

if ($phone === "") {
    $errors[] = "Phone number is required.";
} elseif (!preg_match("/^\d{8,12}$/", $phone)) {
    $errors[] = "Phone number must be 8 to 12 digits.";
}

$allowed_skills = ["HTML", "CSS", "JavaScript", "SQL"];
if (count($skills) === 0) {
    $errors[] = "Please choose at least one skill.";
}
foreach ($skills as $skill) {
    if (!in_array($skill, $allowed_skills, true)) {
        $errors[] = "Unknown skill selected.";
        break;
    }
}

$skill_html = in_array("HTML", $skills, true) ? 1 : 0;
$skill_css  = in_array("CSS", $skills, true) ? 1 : 0;
$skill_js   = in_array("JavaScript", $skills, true) ? 1 : 0;
$skill_sql  = in_array("SQL", $skills, true) ? 1 : 0;


$eoi_number = null;
$db_error   = false;

if (count($errors) === 0) {
    require_once "settings.php";

    try {
        $conn = mysqli_connect($host, $user, $pwd, $sql_db);

    
        $create_table = "CREATE TABLE IF NOT EXISTS eoi (
            EOInumber    INT AUTO_INCREMENT PRIMARY KEY,
            job_ref      CHAR(5)      NOT NULL,
            first_name   VARCHAR(20)  NOT NULL,
            last_name    VARCHAR(20)  NOT NULL,
            dob          DATE         NOT NULL,
            gender       VARCHAR(10)  NOT NULL,
            street       VARCHAR(40)  NOT NULL,
            suburb       VARCHAR(40)  NOT NULL,
            state        VARCHAR(3)   NOT NULL,
            postcode     CHAR(4)      NOT NULL,
            email        VARCHAR(100) NOT NULL,
            phone        VARCHAR(12)  NOT NULL,
            skill_html   TINYINT(1)   NOT NULL DEFAULT 0,
            skill_css    TINYINT(1)   NOT NULL DEFAULT 0,
            skill_js     TINYINT(1)   NOT NULL DEFAULT 0,
            skill_sql    TINYINT(1)   NOT NULL DEFAULT 0,
            other_skills TEXT,
            status       ENUM('New','Current','Final') NOT NULL DEFAULT 'New'
        )";
        mysqli_query($conn, $create_table);

        
        $insert = "INSERT INTO eoi (job_ref, first_name, last_name, dob, gender,
                       street, suburb, state, postcode, email, phone,
                       skill_html, skill_css, skill_js, skill_sql, other_skills)
                   VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insert);
        mysqli_stmt_bind_param($stmt, "sssssssssssiiiis",
            $jobref, $firstname, $lastname, $dob_for_db, $gender,
            $street, $suburb, $state, $postcode, $email, $phone,
            $skill_html, $skill_css, $skill_js, $skill_sql, $otherskills);
        mysqli_stmt_execute($stmt);

       
        $eoi_number = mysqli_insert_id($conn);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } catch (mysqli_sql_exception $e) {
        $db_error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Application Result | Reel House</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<main>
  <section class="contact">
    <div class="wrap">
<?php if ($eoi_number !== null): ?>
      <h1>Application received</h1>
      <p>Thank you, <?php echo $firstname; ?>. Your application has been saved.</p>
      <p>Your Expression of Interest number is <strong><?php echo $eoi_number; ?></strong>.</p>
      <p><a class="btn" href="index.html">Back to Home</a></p>
<?php elseif ($db_error): ?>
      <h1>Something went wrong</h1>
      <p>Sorry, your application could not be saved right now. Please try again later.</p>
      <p><a class="btn" href="apply.php">Back to the form</a></p>
<?php else: ?>
      <h1>Please fix the following</h1>
      <ul>
<?php foreach ($errors as $error): ?>
        <li><?php echo $error; ?></li>
<?php endforeach; ?>
      </ul>
      <p><a class="btn" href="apply.php">Back to the form</a></p>
<?php endif; ?>
    </div>
  </section>
</main>
</body>
</html>
