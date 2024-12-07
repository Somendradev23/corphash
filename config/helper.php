<?php
function createSlug($string)
{
    $string = strtolower(trim($string));
    $string = preg_replace('/[^a-z0-9-]+/', '-', $string);
    return rtrim($string, '-');
}

function processEnv($key, $default = null)
{
    // Check if the variable exists in $_ENV
    if (isset($_ENV[$key])) {
        return $_ENV[$key];
    }

    // Fall back to getenv()
    $value = getenv($key);

    if ($value === false) {
        return $default;
    }

    return $value;
}

// Load the environment variables from the `.env` file if available
function loadEnv($file = '.env')
{
    if (!file_exists($file)) {
        return;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Ignore comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Parse key-value pairs
        list($key, $value) = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);

        // Remove surrounding quotes
        $value = trim($value, '"');

        // Set environment variable
        putenv("$key=$value");
        $_ENV[$key] = $value;
    }
}
loadEnv();