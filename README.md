# Curl cURL

This is a helper class to make your code more clean by curling cURL just into a line. With Curl cUrl, you don't have to init or close the connection as it does by itself. Just wrap up options and kaboom!

With version 2.0 all options can be chain-loaded.

##Usage

Require curlCurl.php and create object:

`$curlCurl = new Curl();`

Then chain all options and curl!

'$curlCurl->url("http://thambaru.com")->curl();'

##Output

Same output of curl exec.

##Notes

* All options are in camelCase.
* Option values like "CURLSSH_AUTH_PUBLICKEY" can be directly set as "PUBLICKEY".
* CURLOPT_INTERFACE has been set as "interfaceName" to avoid conflicts with PHP.
* You must be called `curl()` at the end if cURL needs to be executed.
