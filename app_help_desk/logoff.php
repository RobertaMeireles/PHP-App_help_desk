<?php

session_start(); //open session to use session:

session_destroy(); //to destroy all session.
header('Location: index.php'); //go to index.php

?>