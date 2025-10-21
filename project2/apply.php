<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Help Desk Appointment Form" />
    <meta name="keywords" content="HTML, Form, Help Desk" />
    <meta name="author" content="Sarah Agate" />
    <link rel="stylesheet" href="styles.css" />
    <title>Apply</title>
</head>
<body>

<?php
// Include shared fragments (should NOT contain full <html> markup)
include "header.inc";
include "nav.inc";
?>

<main id="apply-main" class="apply">
    <h1>Job application for Education Technology Research Assistant</h1>

    <form method="post" action="process.php" novalidate>
        <!-- Reference -->
        <fieldset>
            <legend>Reference</legend>
            <label for="ReferenceID">Reference ID:</label>
            <input type="text" id="ReferenceID" name="ReferenceID" required
                   pattern="[A-Za-z0-9]{5}" placeholder="5 alphanumeric characters">
        </fieldset>

        <!-- About you -->
        <fieldset>
            <legend>About you</legend>
            <label for="givenname">Given Name:</label>
            <input type="text" id="givenname" name="givenname" maxlength="20" required
                   pattern="[A-Za-z]+" placeholder="First Name">

            <label for="familyname">Family Name:</label>
            <input type="text" id="familyname" name="familyname" maxlength="20" required
                   pattern="[A-Za-z]+" placeholder="Last Name">

            <label for="date">Date of Birth:</label>
            <input type="text" id="date" name="date" placeholder="dd/mm/yyyy"
                   pattern="\d{2}/\d{2}/\d{4}" required>
        </fieldset>

        <!-- Gender -->
        <fieldset>
            <legend>Gender</legend>
            <label><input type="radio" id="male" name="gender" value="Male" required> Male</label>
            <label><input type="radio" id="female" name="gender" value="Female"> Female</label>
            <label><input type="radio" id="other" name="gender" value="Other"> Other</label>
        </fieldset>

        <!-- Address -->
        <fieldset>
            <legend>Address</legend>
            <label for="street">Street Address (max 40 chars):</label>
            <input type="text" id="street" name="street" maxlength="40" required>

            <label for="suburb">Suburb/Town (max 40 chars):</label>
            <input type="text" id="suburb" name="suburb" maxlength="40" required>

            <label for="state">State:</label>
            <select id="state" name="state" required>
                <option value="">-- Select State --</option>
                <option value="VIC">VIC</option>
                <option value="NSW">NSW</option>
                <option value="QLD">QLD</option>
                <option value="NT">NT</option>
                <option value="WA">WA</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="ACT">ACT</option>
            </select>

            <label for="postcode">Postcode (exactly 4 digits):</label>
            <input type="text" id="postcode" name="postcode" pattern="^[0-9]{4}$"
                   title="Postcode must be exactly 4 digits" required>
        </fieldset>

        <!-- Personal details -->
        <fieldset>
            <legend>Personal Details</legend>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="example@email.com">

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="^[0-9]{8,12}$"
                   title="Phone number must be 8 to 12 digits" required>
        </fieldset>

        <!-- Skills -->
        <fieldset>
            <legend>Skills</legend>

            <label><input type="checkbox" id="skill1" name="skills[]" value="programming"> Programming</label>
            <label><input type="checkbox" id="skill2" name="skills[]" value="design"> Design</label>
            <label><input type="checkbox" id="skill3" name="skills[]" value="management"> Management</label>

            <label>
                <input type="checkbox" id="other_skills_checkbox" name="skills[]" value="other">
                Other skills...
            </label>

            <div id="other_skills_container" style="display:none;">
                <label for="other_skills_textarea">Please specify:</label>
                <textarea id="other_skills_textarea" name="other_skills"
                          placeholder="Enter other skills here..."></textarea>
            </div>
        </fieldset>

        <p>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </p>
    </form>
</main>

<?php include "footer.inc"; ?>

<script>
(function(){
    const otherCheckbox = document.getElementById('other_skills_checkbox');
    const otherContainer = document.getElementById('other_skills_container');
    function toggle() {
        otherContainer.style.display = otherCheckbox.checked ? 'block' : 'none';
    }
    otherCheckbox.addEventListener('change', toggle);
    toggle(); // set initial state
})();
</script>

</body>
</html>
