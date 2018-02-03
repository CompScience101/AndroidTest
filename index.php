<?php

date_default_timezone_set("Europe/London");
// include your composer dependencies
require_once 'GoogleDrive/vendor/autoload.php';

// I'm using a service account, use whatever Google auth flow for your type of account.

putenv('GOOGLE_APPLICATION_CREDENTIALS=/GoogleDrive/server-key.json');
$client = new Google_Client();
$client->addScope(Google_Service_Drive::DRIVE);
$client->useApplicationDefaultCredentials();

$service = new Google_Service_Drive($client);

$fileId = "SAMPLE Newsletter (1).pdf"; // Google File ID
$content = $service->files->get($fileId, array("alt" => "media"));

// Open file handle for output.

$outHandle = fopen("/path/to/destination", "w+");

// Until we have reached the EOF, read 1024 bytes at a time and write to the output file handle.

while (!$content->getBody()->eof()) {
        fwrite($outHandle, $content->getBody()->read(1024));
}

// Close output file handle. 

fclose($outHandle);
echo "Done.\n"

?>
