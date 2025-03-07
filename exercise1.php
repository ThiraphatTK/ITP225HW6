
<?php 

// set key for sha1 and md5 
$kmd5 = "md5";
$ksha1 = "sha1";

// asking the user to input the which hashing they want to use
$key = readline("Choose Between md5 or sha1 to hash your phrase: ");


// if the key equal md5 use the md5 for hashing
if (strcasecmp($key, $kmd5) == 0){

    // asking the user to enter phrase and hash it with md5
    $phrase = readline("Enter your phrase: ");
    // echo the md5
    echo md5($phrase);
}
// if the key equal md5 use the md5 for hashing
elseif (strcasecmp($key, $ksha1) == 0){

    // asking the user to enter phrase and hash it with sha1
    $phrase = readline("Enter your phrase: ");
    // echo the sha1
    echo sha1($phrase);
}


?>