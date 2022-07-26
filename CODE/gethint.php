<?php
$a[] = "asthma";
$a[] = "anosmia";
$a[] = "corona";
$a[] = "coronary artery disease";
$a[] = "diabetes";
$a[] = "drug allergy";
$a[] = "food allergy";
$a[] = "fraility";
$a[] = "hypertension";
$a[] = "insect allergy";
$a[] = "latex allergy";
$a[] = "mold allergy";
$a[] = "obseity";
$a[] = "pollen allergy";
$a[] = "reflux esophagitis";
$a[] = "traveled a lot";

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