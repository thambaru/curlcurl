# Curl cURL

This is a helper class to make your code clean by curling cURL just into a line. With Curl cURL, you don't have to init or close the connection as it does by itself.

With version 2.0 all options can be chain-loaded.

## Usage

Require curlCurl.php and create an object:

`$curlCurl = new Curl();`

Then chain all options and curl!

`$curlCurl->url("http://thambaru.com")->curl();`

## Output

The same output of curl exec.

## Notes

* All options are in camelCase.
* Option values like "CURLSSH_AUTH_PUBLICKEY" can be directly set as `PUBLICKEY`.
* CURLOPT_INTERFACE has been set as `interfaceName()` to avoid conflicts with PHP.
* You must call `curl()` at the end to execute cURL.
