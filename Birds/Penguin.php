<?php
namespace Birds;
require_once('./AbstractBird.php');
use AbstractBird;

class Penguin extends AbstractBird {

    final protected function getName() {
        return 'ペンギン';
    }

    final protected function gethowToMovement() {
        return '泳ぐ';
    }
}

?>