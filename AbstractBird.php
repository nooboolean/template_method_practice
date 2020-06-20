<?php

abstract class AbstractBird {
    private $birdInfo;
    
    final public function getInfo() {
        $this->birdInfo['type'] = $this->getType();
        $this->birdInfo['name'] = $this->getName();
        $this->birdInfo['birthType'] = $this->getBirthType();
        $this->birdInfo['howToMovement'] = $this->gethowToMovement();
        return $this->birdInfo;
    }

    final private function getType() {
        return '鳥類';
    }

    protected abstract function getName();

    final private function getBirthType() {
        return '卵生';
    }

    protected abstract function gethowToMovement();
}

?>
