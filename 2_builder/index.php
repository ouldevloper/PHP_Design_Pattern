<?php

require "Post.php";
$sql = (new Post)::where_("name","=","skjdfh")->where("name","=","skjdfh")->get();
print($sql);