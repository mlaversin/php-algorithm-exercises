<?php

function is_anagram($word1, $word2) {
    
    $word1 = strtolower($word1);
	$word2 = strtolower($word2);
	
	if (strlen($word1) !== strlen($word2)) {
        return "Ces mots ne sont pas des anagrammes !";
    }

    $word1 = str_split($word1);
    sort($word1);

    $word2 = str_split($word2);
    sort($word2);

    $arraysAreEqual = ($word1 == $word2);

    if ($arraysAreEqual) {
        echo "Ces mots sont bien des anagrammes !";
    } else {
        echo "Ces mots ne sont pas des anagrammes !";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anagrammes</title>
</head>
<body>

<h1>Anagrammes</h1>
<?php

is_anagram("CHINE", "niche");

?>
    
</body>
</html>