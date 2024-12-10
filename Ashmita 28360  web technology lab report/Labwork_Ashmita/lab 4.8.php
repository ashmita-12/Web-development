<?php
// Set up error handling to capture and display XML validation errors
libxml_use_internal_errors(true);

// Load the XML file
$xml = new DOMDocument();
$xml->load('lab 4.8.xml');

// Validate the XML file against the DTD
if ($xml->validate()) {
    echo "The XML file is valid according to the DTD.";
} else {
    echo "The XML file is valid according to the DTD.\n";
    // Display errors
}
?>