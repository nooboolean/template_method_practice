<?php
namespace Birds;
require_once('./AbstractBird.php');
use AbstractBird;

class Crow extends AbstractBird {

    final protected function getName() {
        return 'カラス　';
    }

    final protected function gethowToMovement() {
        return '飛ぶ';
    }
}

?>