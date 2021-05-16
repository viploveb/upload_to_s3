<?php

require 'vendor/autoload.php';

$s3 = new Aws\S3\S3Client([
	'region'  => 'us-east-1',
	'version' => 'latest',
	/*'credentials' => [
	    'key'    => "key_env_var",
	    'secret' => "secret_env_var",
	]*/
]);

function upload_to_s3($file_name, $bucket, $object_name=None){
  if ($object_name == None){
    $object_name = $file_name
  }
  $result = $s3->putObject([
	'Bucket' => $bucket,
	'Key'    => $object_name,
	'SourceFile' => $file_name
]);
}

upload_to_s3("file_name.jpeg");

?>
