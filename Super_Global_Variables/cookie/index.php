<?php
$cookie_name = "username";
$cookie_value = "Asmaa";

//? time () => gives the current Unix timestamp (number of seconds since Jan 1, 1970).
//? path => Which URL paths can access the cookie.
//? domain => which website/domain can use the cookie "ex.com" or "" for current domain
//? secure => if true cookie will send only over HTTPS.
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/", "", false);

if (isset($_COOKIE[$cookie_name]))
    echo $_COOKIE[$cookie_name];
else 
    echo "Cookie was just created. Refresh the page";

//? Delete the cookie
// cookie's expir point in the past.
// (name, path, domain) match exactly as they were.
setcookie($cookie_name, "", time() - 3600, "/", "", false);