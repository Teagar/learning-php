<?php

// add cookie
setcookie('user', 'Teagar Cerqueira', time()+60);
setcookie('email', 'dfhi@gmail.com', time()+60);
setcookie('search', 'adidas', time()+60);

// remove cookie
setcookie('email', 'dfhi@gmail.com', time()-60);
var_dump($_COOKIE);
