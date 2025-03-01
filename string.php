<?php
$mystr = "arbaz khan";

//length
$length = strlen($mystr);
echo $mystr . " length : " . $length . "<br>";

//word count
$word = str_word_count($mystr);
echo "name in word : " . $word . "<br>";

//add . or other content
$newStr = chunk_split($mystr, 2, '.');
echo $newStr . "<br>";

// short by length and this return the array
$short = str_split($mystr, 2);
print_r($short);

// convert in uppercase
$mystr = strtoupper($mystr);
echo "<br>" . $mystr . "<br>";

// check the how many time use 
$strdata = "hello this is name and your name and is name";
$n = substr_count($strdata, "name", 25);
echo "<br>" . $n;

// convert the first later capital
$g = ucfirst($strdata);
$h = ucwords($strdata);
echo "<br>" . $g;
echo "<br>" . $h;

// convert the first later small
$strsmall = "Hello This is Name and Your Name and is Name";
$g = lcfirst($strsmall);
echo "<br>" . $g;
echo "<br>" . $h;

// compare case sensitive 
if (strcmp("jaipur", "jaipur") === 0)
    echo "<br> same";
else
    echo "<br> not same";


// compare not case sensitive 
if (strcasecmp("jaipur", "Jaipur") === 0)
    echo "<br> same";
else
    echo "<br> not same";
