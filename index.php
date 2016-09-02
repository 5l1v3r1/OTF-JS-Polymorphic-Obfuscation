<?php
function prep($output) {
	$output = str_replace(array("\n", '  '), '', $output);
	$return = '';
	foreach(str_split($output) as $x) {
		$return .= ord($x).',';
	}
	$return = rtrim($return, ',');
	return "<script>document.write(String.fromCharCode({$return}))</script>";
}

function randomString($length = 8, $randomString = '') {
    $characters = implode("", array_merge(range('a', 'z'), range('A', 'Z')));

    for ($i = 0; $i < $length; $i++)
        $randomString .= $characters[mt_rand(0, strlen($characters) - 1)];

    return $randomString;
} 
function enc($output) {
	$output = str_replace('  ', ' ', $output);
	$output = str_replace('  ', ' ', $output);
	$output = str_replace("\n", '', $output);
	
    $randomFunc = randomString(mt_rand(6,12));
    $randomOut  = randomString(mt_rand(6,12));
    $randomNum  = randomString(mt_rand(6,12));
	$randomName = randomString(mt_rand(6,12));
    $randomVal  = mt_rand(1, 999);

    $return = '<!doctype html>'.PHP_EOL.'<script>';
    $return .= 'var ' . $randomNum . ' = [';

    foreach(str_split($output) as $x) {
        $return .= (ord($x) + $randomVal) . ',';
    }
	
	$return = rtrim($return, ', ').'];';
	$return .= "var {$randomOut}='';";
    $return .= "{$randomNum}.forEach(function {$randomFunc}({$randomName}){{$randomOut}+=String.fromCharCode(parseInt({$randomName})-{$randomVal});});";
    $return .= "document.write({$randomOut});";
    $return .= '</script>';

    return $return;
}
ob_start("enc");

?>
