<?php
namespace Birds;
require_once('./AbstractBird.php');
use AbstractBird;

class Ostrich extends AbstractBird {

    final protected function getName() {
        return 'ダチョウ';
    }

    final protected function gethowToMovement() {
        return '走る';
    }
}

?>