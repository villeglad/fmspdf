<?php

// Usage:
// FileMaker: Insert From Url script step
// InsertFromUrl ("httppost://url-to-this.test?template=" & pdf::template & "&filename=file" & pdf::id )
// set target field to a container field

require '../vendor/autoload.php';

$pdf = new mPDF();
$pdf->WriteHtml($_POST['template']);
$pdf->Output($_POST['filename'] . '.pdf', 'D');
