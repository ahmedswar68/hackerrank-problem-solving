<?php

// Complete the designerPdfViewer function below.
<?php

// Complete the pangrams function below.
function pangrams($s) {
$letters = array_count_values(str_split($s));
unset($letters[" "]);
return (sizeof($letters) == 26 ? "" : "not ")."pangram";

}