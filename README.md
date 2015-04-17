# Curl cURL

This is a helper class to make your code more clean by curling cURL just into a line. With Curl cUrl, you don't have to init or close the connection as it does by itself. Just wrap up options and kaboom!

##Usage

Require curl.php and call:

`CURL::curl($options);`

Add all cURL options in an array:

`$options = array(
CURLOPT_URL=>'http://thambaru.com'
);`

##Output

Same output of curl exec.
