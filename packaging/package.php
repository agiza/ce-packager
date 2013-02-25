<?php

include_once('lib/utils.php');

// get and validate arguments
$usage_string = 'Usage is php '.__FILE__.' <outputdir>'.PHP_EOL;
$usage_string .= "<outputdir> = directory in which to create the package (if it does not start with a '/' the running directory will be attached)".PHP_EOL;
//$usage_string .= '<preinstalled> = true / false'.PHP_EOL;
//$usage_string .= '<type> = CE / TM'.PHP_EOL;
//$usage_string .= '<number> = vX.X.X'.PHP_EOL;
//$usage_string .= '<beta> = extra text to include in the version name (like "beta")'.PHP_EOL;

if ($argc < 2) {
	die($usage_string);
}

$version_ini = array();
$version_ini['outputdir'] = trim($argv[1]);
$version_ini['preinstalled'] = 'false';
$version_ini['type'] = 'TM';
$version_ini['number'] = '7.1.0';
$version_ini['beta'] = 'beta';

//if (strcmp($version_ini['type'], 'CE') != 0 &&  strcmp($version_ini['type'], 'TM') != 0) {
//	die($usage_string);
//}
//
//if (strcmp($version_ini['preinstalled'], 'true') != 0 && strcmp($version_ini['preinstalled'], 'false') != 0) {
//	die($usage_string);
//}
//
//if (preg_match('/^v[0-9]+\.[0-9]+\.[0-9]+/', $version_ini['number']) != 1) {
//	die($usage_string);
//}

// set php_ini settings
error_reporting(E_ALL);
ini_set('max_execution_time', 0);
ini_set('memory_limit', -1);
ini_set('max_input_time ', 0);

// start packaging
echo "Started packaging\n";

$baseDir = $version_ini['outputdir'];
$xmlUri = __DIR__ . '/directories.' . $version_ini['type'] . '.xml';

$attributes = array(
	'package.dir' => getcwd(),
	'package.type' => $version_ini['type'],
	'package.version' => $version_ini['number'],
	'package.beta' => $version_ini['beta'],
	'package.preinstalled' => $version_ini['preinstalled'],
	'BASE_DIR' => $baseDir,
	'xml.uri' => $xmlUri,
);
$options = array();
foreach($attributes as $attribute => $value)
	$options[] = "-D{$attribute}={$value}";
$options = implode(' ', $options);

chdir(__DIR__ . '/../installer/directoryConstructor');
$command = "phing -verbose -logger phing.listener.AnsiColorLogger $options Pack";
echo "Executing: $command\n";
$returnedValue = null;
passthru($command, $returnedValue);
if($returnedValue != 0)
	exit($returnedValue);

echo "Finished successfully\n";
exit(0);
