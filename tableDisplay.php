<?php
require_once 'abstractDisplay.php';

class tableDisplay extends abstractDisplay {

    protected function displayHeader () {
        echo '<table>';
    }

    protected function displayBody() {
        foreach ( $this->getData() as $key => $value ) {
            echo <<<BODY
            <tr>
                <th>{$key}</th>
                <td>{$value}<td>
            </tr>
BODY;
        }
    }

    protected function displayFooter() {
        echo '</table>';
    }
}