<?php

$count = 0;

function rang()
{
    global $count;
    $count++;
}
;

rang();
rang();
rang();
rang();

if ($count <= 5) {
    echo "Oq";
}
else if ($count > 5) {
    echo "Qora";
};