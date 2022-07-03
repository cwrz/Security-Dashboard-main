<?php
include("header.php");
?>
<div class="contact-container">
    <h1>Kontakt</h1>

    <form class="cs-form cs-message">

        <label for="first-name">First Name: </label>
        <input type="text" class="field field1" placeholder="First Name" name="first-name" id="first-name">

        <label for="last-name">Last Name: </label>
        <input type="text" class="field field2" placeholder="Last Name" name="last-name" id="last-name">

        <label for="zip-code">Email </label>
        <input type="text" class="field field3" placeholder="Email" name="Email" id="Email">

        <label for="spirit-animal">Phone </label>
        <input type="text" class="field field4" placeholder="Phone" name="phone" id="phone">

        <label for="textfeld">...</label>
        <textarea class="textarea" rows="5" cols="20" placeholder="..." name="textfeld" id="textfeld"></textarea>

        <button class="button" type="submit">
            OK
        </button>

    </form>
</div>
