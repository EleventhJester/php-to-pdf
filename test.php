<?php
phpinfo();


// Check if the DOM extension is enabled
if (extension_loaded('dom')) {
    echo "DOM extension is enabled.";
} else {
    echo "DOM extension is not enabled.";
}

print extension_loaded('');
?>
