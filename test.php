<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
print "会社名は" . $name . "ですね";