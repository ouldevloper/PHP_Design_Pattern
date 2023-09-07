<?php

require_once "./Friend.php";


class FriendFactory implements FriendFactoryInterface {
    public function create() : Friend {
        
        $friend = new Friend();
        // initialize your friend
        return $friend;
    }
}