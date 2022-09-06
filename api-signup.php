<?php
require_once __DIR__.'/_x.php';

_validate_user_name();
_validate_user_last_name();
_validate_email();

// Success
_respond('user created');














