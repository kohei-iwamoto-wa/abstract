<?php
require_once 'abstractDisplay.php';

class listDisplay extends abstractDisplay {
    protected function displayHeader(){
        echo '<dl>';
    }

    protected function displayBody(){
        foreach ( $this->getData() as $key => $value ) {
            echo '<dt>Item' . $key . '</dt>';
            echo '<dd>' . $value . '<dd>';

        }
    }

    protected function displayFooter() {
        echo '</dl>';
    }
}