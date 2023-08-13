<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

function generatePdf($filename, $text) {
    // Create a PDF document
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true);
    $dompdf = new Dompdf($options);
    $dompdf->setPaper('letter');

    // Define the HTML content
    $html = '<html>
    <head>
    <style>
      body { font-family: Arial, sans-serif; }
      h1 { font-size: 24px; }
      p { margin-top: 12px; }
    </style>
    </head>
    <body>';

    // Split the text into paragraphs
    $paragraphs = explode("\n\n", $text);

    // Add each paragraph to the HTML content
    foreach ($paragraphs as $paragraph) {
        $html .= '<p>' . nl2br(htmlspecialchars($paragraph)) . '</p>';
    }

    $html .= '</body>
    </html>';

    // Load the HTML content into dompdf
    $dompdf->loadHtml($html);

    // Render the PDF (output to the browser or save to a file)
    $dompdf->render();
    file_put_contents($filename, $dompdf->output());

    echo 'PDF generated successfully.';
}

// Read the text from the .txt file
$text = file_get_contents('motivatie.txt');

// Generate the first PDF
generatePdf('output-test.pdf', $text);

// Generate the second PDF
generatePdf('output2.pdf', $text);
?>
