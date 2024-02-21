<?php
function countTool()
{
    function countWords($string)
    {
        $wordCount = 0;
        $isWord = false;

        for ($i = 0; $i < strlen($string); $i++) {
            if ($string[$i] != " " && !$isWord) {
                $isWord = true;
                $wordCount++;
            } elseif ($string[$i] == " " && $isWord) {
                $isWord = false;
            }
        }

        return $wordCount;
    }
}
$string = "one, two, three, four a four is two plus two or three plus one"; //14 words
echo countWords($string);