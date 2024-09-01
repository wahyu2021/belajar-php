<?php

function sayHello (string $first, string $middle = "", string $last): void
{
    echo "Helo $first $middle $last\n";
}

sayHello(first: "Luthfi", middle: "hai" ,last: "Andini");
sayHello(first: "Luthfi", last: "Andini");