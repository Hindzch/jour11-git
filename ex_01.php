<?php
for ($i = 0; $i < 5; $i++) {
    try {
        call_pangolin();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
    }
}
?>

