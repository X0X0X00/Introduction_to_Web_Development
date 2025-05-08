
<?php
    // Initialize customized cookie parameters
    $cookie_name = ""; // complete with a name of your choice
    $cookie_value = "";	// complete with a value of your choice
    $cookie_expiration = time() + ...; // complete with an expiration time in seconds
    $cookie_path = "/"; // Available in the entire domain
    $cookie_domain = "";
    $cookie_secure = false; // Set to true if using HTTPS
    $cookie_http = true; // Set to true to restrict cookie access to HTTP

    // Set the cookie with customized parameters
    setcookie(
        $cookie_name,
        $cookie_value,
        $cookie_expiration,
        $cookie_path,
        $cookie_domain,
        $cookie_secure,
        $cookie_http
    );
	echo "Cookie set!";
?>
