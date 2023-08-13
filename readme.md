# PHP | PDF Generator Using Dompdf

This is a simple example of how to generate PDFs from text using the Dompdf library in PHP.

## Installation

1. Clone this repository.
2. Create a `composer.json` file if not already present in your project directory. Add the following content to it:

   {
       "require": {
           "dompdf/dompdf": "^2.0"
       }
   }
3. Run `composer install` to install the required dompdf/dompdf library.

   

## Usage

1. Create or modify the `motivatie.txt` file to contain the text you want to convert to a PDF.
2. Edit the `generatePdf` function in `generate-pdf.php` to customize the output filename and HTML styling if needed.
3. Run the PHP script using the following command:
   
   php generate-pdf.php

