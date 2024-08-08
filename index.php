<?php
include_once('init.php');
session_start();

/* Intercept controller and view name from the URL */
$CONTROLLER = isset($_GET['c']) ? $_GET['c'] : 'index';
$VIEW = isset($_GET['v']) ? $_GET['v'] : 'index';

/* Create Controller file name */
$ControllerName = ucfirst($CONTROLLER) . "Controller";
$VIEW_FILE = VIEWS_DIR . DS . $CONTROLLER . DS . $VIEW . ".php";

/* Set some variables for the HTML page */
$PAGE_TITLE = get_variable_content($VIEW_FILE, 'PAGE_TITLE');
$PAGE_DESCRIPTION = get_variable_content($VIEW_FILE, 'PAGE_DESCRIPTION');

/* Include controller file */
include_once(CTRL_DIR . DS . $ControllerName . ".php");
/* Include page layout. Page layout will laod View file */
include_once(LAYOUT_DIR . DS . "layout.php");


/* Check if a given variable exists in .php file and return its content or null */
/* View file may have PHP header section with some variables specified (like PAGE TITLE for Html layout) */
function get_variable_content($file, $variable_name) {
    // Check if the file exists
    if (!file_exists($file)) {
        null;
    }
    // Read the file contents
    $content = file_get_contents($file);
    // Define a regular expression to match variable assignment
    $pattern = '/\$\b' . preg_quote($variable_name, '/') . '\b\s*=\s*(.*?);/';
    // Use regular expression to find the variable assignment
    if (preg_match($pattern, $content, $matches)) {
        // Return the matched content (variable value)
        return trim($matches[1], " \t\n\r\0\x0B\"'");
    } else {
        return null;
    }
}


function isAccordionSession($sessionVarNameValue) {
    return isset($_SESSION['accordionSession']) && $_SESSION['accordionSession'] == $sessionVarNameValue;
}