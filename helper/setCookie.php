<?php

function cookie($name, $value) {

    setcookie($name, $value, time() + 60*60*24);

}