<?php
include 'Navbar.php';
?>

<br><br><br><br><br><br><br><br>

    <button class="button" id="PrevRecord" style="float:left" onclick="RecordPrev();"> Prev</button>
    <button class="button" id="NextRecord" style="float:right" onclick="RecordNext();"> Next</button>

<table align="center" cellpadding="10px" id="res"></table>
    <button class="button" id="PrevRecord" style="float:left" onclick="RecordPrev();"> Prev</button>
    <button class="button" id="NextRecord" style="float:right" onclick="RecordNext();"> Next</button>
<br><br><br><br><br>

<?php
require 'footer.php'
?>