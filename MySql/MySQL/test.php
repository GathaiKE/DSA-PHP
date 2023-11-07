<?php
    $server = getenv("DB_HOST");
    $user = getenv("DB_USER");
    $password = getenv("DB_PASS");
    $db = "Task_Manager";

    echo "Server".$server."\n";
    echo "User".$user."\n";
    echo "pass".$password."\n";

?>