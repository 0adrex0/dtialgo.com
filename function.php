<?php
function setLeng ($p1)
{
    if(!in_array($p1, array('ru','en')))
        $p1 = 'en';
    $_SESSION['USER_LANGUAGE'] = $p1;
}

