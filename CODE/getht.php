<?php
$a[] = "a sore throat";
$a[] = "chills";
$a[] = "cough";
$a[] = "diarrhea";
$a[] = "fatigue";
$a[] = "headache";
$a[] = "loss of smell";
$a[] = "loss of taste";
$a[] = "muscle ache";
$a[] = "muscle pain";
$a[] = "repeated shaking with chills";
$a[] = "runny nose";
$a[] = "shortness of breath";
$a[] = "stuffy nose";

$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>