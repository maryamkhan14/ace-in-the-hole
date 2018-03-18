<?php include ('php/includes/header.php'); ?>
<main>
    <?php include ('php/includes/slideshow.php'); ?>
    <?php include ('php/includes/social-weather.php'); ?>
    <?php include ('php/includes/mobile-img.php'); ?>
    <h2>Contact us!</h2>
    <!-- Start code for the form-->
    <p>Please ensure you fill out all fields on this form!</p>
    <form method="post" action="php/contact-success.php">
        <label for="name">Name: </label><br>
        <input type="text" name="name" id="name" required="required">
        <br>
        <br>

        <label for="position">Position (Athlete/Volunteer/Other): </label><br>
        <select name="position" required="required">
            <option selected value="none"> </option>
            <option value="Athlete">Athlete</option>
            <option value="Volunteer">Volunteer</option>
            <option value="Other">Other</option>
        </select>
        <br>
        <br>

        <label for="subject">Subject (max. 25 characters): </label><br>
        <input type="text" name="subject" id="subject" maxlength="25" required="required">
        <br>
        <br>

        <label for="email">Email: </label><br>
        <input type="email" name="email" id="email" required="required">
        <br>
        <br>

        <label for="comments">Comments: </label><br>
        <textarea name="comments" id="comments" required="required"></textarea>
        <br>
        <br>
        
        <input type="submit" name="send" value="Send Message!">
    </form>
</main>
<?php include ('php/includes/footer.php'); ?>
