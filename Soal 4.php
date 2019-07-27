<?php
function isVowel($i)
{
    $i = strtoupper($i);
    return ($i =='A' || $i =='E' || $i =='I' || $i =='O' || $i =='U');
}

function hitungvokal($kata)
{
    $count = 0;
    for ($i = 0; $i < strlen($kata); $i++)
        if (isVowel($kata[$i])) // cek vokal
            ++$count;
    return $count;
}

$kata = "programmer";
echo ($kata) ."<br>\n";
echo hitungvokal($kata)."<br><br>\n";

$kata = "hmm..";
echo ($kata) . "<br>\n";
echo hitungvokal($kata) . "\n";
?>
