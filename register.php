<?php include ('php/includes/header.php'); ?>
<main>
    <?php include ('php/includes/slideshow.php'); ?>
    <?php include ('php/includes/social-weather.php'); ?>
    <?php include ('php/includes/mobile-img.php'); ?>
    <h2>Register as an athlete or volunteer!</h2>

    <div class="event-info">
        <h3>Information About the Events</h3>
        <h3><u>1. COSTS</u></h3>
        <i>Saturday</i>
        <ul>
            <li>Long Course Triathlon: $240</li>
            <li>Olympic Triathlon: $110</li>
            <li>10K Marathon: $50</li>
            <li>Half Marathon: $75</li>
        </ul>
        <i>Sunday</i>
        <ul>
            <li>Sprint Triathlon: $90</li>
            <li>Try-a-Tri: $65</li>
        </ul>
        <p>Cost includes:</p>
        <ul>
            <li>Food & Beer</li>
            <li>Access to the weekend’s live entertainment & Fitness Expo</li>
            <li>Commemorative Finisher medal</li>
            <li>Accurate Chip Timing for competitive races</li>
            <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
            <li>Post-event party & entertainment</li>
        </ul>
        <p>NOTE: Tech shirts guaranteed to pre-registered participants only.</p>

        <h3><u>2. PACKET PICK UP</u></h3>
        <p>
            All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.
        </p>

        <h3><u>3. COURSE DETAILS</u></h3>
        <p>WATER TEMPERATURE is expected to be between 62 – 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.
        </p>
        <p>Long Course SWIM – 1.2mi - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.
        </p>
        <p>Long Course BIKE – 58 Miles: A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.
        </p>
        <p>Long Course RUN – 13.1mi - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).
        </p>
        <p>OLYMPIC SWIM – 1,500 meters - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.
        </p>
        <p>OLYMPIC BIKE – 28mi - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.
        </p>
        <p>OLYMPIC RUN – 10K - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).
        </p>
        <p>Sprint: Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.
        </p>
        <p>Try-A-Tri: This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).
        </p>
        <p>Half Marathon COURSE: Half-Marathon (13.1-miles): Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports & Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified
        </p>
        <p>10k COURSE: The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.
        </p>

        <h3><u>4. SCHEDULE</u></h3>
        <h3>Saturday's Events</h3>
        <table>
            <tr>
                <th>Event</th>
                <th>Starting Times</th>
            </tr>
            <tr>
                <td>Long Course Triathlon</td>
                <td>7:00AM</td>
            </tr>
            <tr>
                <td>10K Race</td>
                <td>7:15AM</td>
            </tr>
            <tr>
                <td>Half Marathon Race</td>
                <td>7:15AM</td>
            </tr>
            <tr>
                <td>Olympic Triathlon</td>
                <td>7:30AM</td>
            </tr>
        </table>
        <br>
        <h3>Sunday's Events</h3>
        <table>
            <tr>
                <th>Event</th>
                <th>Starting Times</th>
            </tr>
            <tr>
                <td>Sprint Triathlon</td>
                <td>8:00AM</td>
            </tr>
            <tr>
                <td>Try-a-Tri</td>
                <td>8:20AM</td>
            </tr>
            <tr>
                <td>Splash n Dash</td>
                <td>12:00PM</td>
            </tr>
        </table>
    </div>
    <!-- Start code for the form-->
    <p>Please ensure you fill out all fields on this form!</p>
    <form method="post" action="php/register-success.php">
        <label for="position">Are you registering as a volunteer or as an athlete? </label><br>
        <select name="position" required="required">
            <option value="Athlete">Athlete<br>
            <option value="Volunteer">Volunteer<br>
        </select>
        <br>
        <br>

        <label for="name">Name: </label><br>
        <input type="text" name="name" id="name" maxlength="75" required="required">
        <br>
        <br>

        <label for="email">Email: </label><br>
        <input type="email" name="email" id="email" maxlength="75" required="required">
        <br>
        <br>

        <label for="phone">Phone number: </label><br>
        <input type="text" name="phone" id="phone" maxlength="10" required="required">
        <p class="warning"><b>IMPORTANT: The phone number fields must be exactly ten digits long (no dashes). If your phone number isn't ten digits long, or if you have any other concerns, please <a href="contact.php">contact us</a>.</b></p><br>

        <p>Which events are you registering for?</p>
        <label for="saturdayEvent"><b>Saturday's Events</b></label><br>
        <input type="radio" name="saturdayEvent" value="Long Course Triathlon">Long Course Triathlon<br>
        <input type="radio" name="saturdayEvent" value="Olympic Triathlon">Olympic Triathlon<br>
        <input type="radio" name="saturdayEvent" value="10K Race">10K Race<br>
        <input type="radio" name="saturdayEvent" value="Half Marathon">Half Marathon<br><br>

        <label for="sundayEvent"><b>Sunday's Events</b></label><br>
        <input type="radio" name="sundayEvent" value="Sprint Triathlon">Sprint Triathlon<br>
        <input type="radio" name="sundayEvent" value="Try-a-Tri">Try-a-Tri<br>
        <input type="radio" name="sundayEvent" value="Splash n Dash">Splash n Dash<br>

        <br>

        <label for="emergencyName">Emergency Name: </label><br>
        <input type="text" name="emergencyName" id="emergencyName" maxlength="75" required="required">
        <br>
        <br>

        <label for="emergencyPhone">Emergency Phone Number: </label><br>
        <input type="text" name="emergencyPhone" id="emergencyPhone" maxlength="10" required="required">
        <br>
        <br>

        <label for="shirtSize">What is your T-shirt size?</label><br>
        <select name="shirtSize" required="required">
            <option value="XXXS">XXXS</option>
            <option value="XXS">XXS</option>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="XXXL">XXXL</option>
        </select>
        <br>
        <br>

        <label for="gender">What is your gender?</label><br>
        <select name="gender" required="required">
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="NB">Non-binary/Other</option>
        </select>
        <br>
        <br>

        <input type="submit" name="send" value="Register!">
    </form>
</main>
<?php include ('php/includes/footer.php'); ?>
