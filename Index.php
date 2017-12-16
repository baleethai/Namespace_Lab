<?php

include 'User.php';
include 'Product.php';
include 'Member.php';
include 'Libraries/User.php';

use Acme\Account\User as User;

new User();
new Acme\Catalog\Product();
new App\Account\Member();
new John\User();