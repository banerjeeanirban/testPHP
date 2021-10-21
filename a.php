


Search: in:@James Greene uri



:slack_call:



RV
1

2

UA
3

FF
4


Riscosity-VirtualHQ











engineering


engineering




5

Jeremy Swedroe  2:04 PM
https://blog.jetbrains.com/datagrip/2018/05/21/copy-and-share-data-sources-in-datagrip/

JetBrains BlogJetBrains Blog
Copy and Share Data Sources in IntelliJ-based IDEs | The DataGrip Blog
Hello,In this tutorial we’re going to look at three popular use-cases:— Duplicate a data source within one project.— Share data sources between projects inside one IDE.— Copy a data source (52 kB)
https://blog.jetbrains.com/datagrip/2018/05/21/copy-and-share-data-sources-in-datagrip/


Rocketship Janitor:slack_call:  2:09 PM
To test any regexes that we are writing here are some samples to test on:
2:09
8 files 
php-examples.txt
3 kB PHPClick to view details



java-examples.txt
3 kB C++Click to view details



ruby-examples.txt
2 kB RubyClick to view details



c#-examples.txt
3 kB Plain TextClick to view details



node-examples.txt
Plain TextClick to view details



vue:js-examples.txt
Plain TextClick to view details



react-samples.txt
5 kB C++Click to view details



python-examples.txt
3 kB Plain TextClick to view details




Rocketship Janitor:slack_call:  2:23 PM
I’ll keep updating these to add more stuff in each  one and add new ones

James Greene:slack_call:  2:23 PM
oh man regex machine!

Rocketship Janitor:slack_call:  2:23 PM
boom boom boom

James Greene:slack_call:  2:27 PM
image.png 
image.png


2:28
image.png 
image.png



Nick Mahnke  2:38 PM
It occurs to me we might need a new match type in the json config to handle situations where we want to match multiple instances of something for the same request, for example:
resp, err := http.Post("https://httpbin.org/post", "application/json",
    bytes.NewBuffer(json_data))

req.Header.Set("Content-Type", "application/x-www-form-urlencoded")
req.Header.Set("X-Riscosity-Tkn", "rerfewfergewhlkewjgvwskeghwklgjs")


Send a message to engineering


















Files

php-examples.txt
Rocketship Janitor (you)
October 19th at 2:09 PM



<?php
​
// kvstore API url
$url = 'https://kvstore.p.rapidapi.com/collections';
​
// Collection object
$data = [
  'collection' => 'RapidAPI'
];
​
// Initializes a new cURL session
$curl = curl_init($url);
​
// Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
​
// Set the CURLOPT_POST option to true for POST request
curl_setopt($curl, CURLOPT_POST, true);
​
// Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
​
// Set custom headers for RapidAPI Auth and Content-Type header
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'X-RapidAPI-Host: kvstore.p.rapidapi.com',
  'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  'Content-Type: application/json'
]);
​
// Execute cURL request with all previous settings
$response = curl_exec($curl);
​
// Close cURL session
curl_close($curl);
​
echo $response . PHP_EOL;
​
<?php
​
$url = 'https://kvstore.p.rapidapi.com/collections';
$collection_name = 'RapidAPI';
$request_url = $url . '/' . $collection_name;
​
$curl = curl_init($request_url);
​
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'X-RapidAPI-Host: kvstore.p.rapidapi.com',
  'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxx',
  'Content-Type: application/json'
]);
​
$response = curl_exec($curl);
curl_close($curl);
​
echo $response . PHP_EOL;
​
<?php
​
$url = 'https://kvstore.p.rapidapi.com/collections';
$collection_name = 'RapidAPI';
$request_url = $url . '/' . $collection_name;
​
$data = [
  'public_write' => true
];
​
$curl = curl_init($request_url);
​
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'X-RapidAPI-Host: kvstore.p.rapidapi.com',
  'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  'Content-Type: application/json'
]);
​
$response = curl_exec($curl);
curl_close($curl);
​
echo $response . PHP_EOL;
​
<?php
​
$url = 'https://kvstore.p.rapidapi.com/collections';
$collection_name = 'RapidAPI';
$request_url = $url . '/' . $collection_name;
​
$curl = curl_init($request_url);
​
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'X-RapidAPI-Host: kvstore.p.rapidapi.com',
  'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  'Content-Type: application/json'
]);
​
$response = curl_exec($curl);
curl_close($curl);
​
echo $response . PHP_EOL;
Shared in
engineering
1 day ago
