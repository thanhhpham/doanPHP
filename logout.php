<?php

session_start();
session_unset();
session_destroy();

echo "<script>alert('Logout Success !!!');</script>
<script>window.open('./index.php','_self');</script>
";
