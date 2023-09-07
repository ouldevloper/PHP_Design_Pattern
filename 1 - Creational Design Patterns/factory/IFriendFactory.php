<?php

require_once "./Friend.php";

interface FriendFactoryInterface {
    public function create() : Friend;
}