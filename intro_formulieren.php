<?php
/*
 * Name: R.Evers
 * Date: 24-2-26
 * Formulier introductie
 */
?>
<form method="post" action="resultaat.php">
    <p>
        <label for="namefield">Naam</label>
        <input type="text" name="Naam" id="namefield">
    </p>
    <p>
        <label>Email</label>
        <input type="email" name="email">
    </p>
    <p>
        <label>Gender</label>
        <input type="radio" name="gender" value="Men">Man
        <input type="radio" name="gender" value="Women">Anders
    </p>


    <input type="submit" value="Verstuur nu">

</form>

