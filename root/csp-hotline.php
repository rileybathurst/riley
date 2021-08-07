<?php
// Im not giving this the php file extension so it doesnt get used accidentally
// this goes at the root domain not the theme

// Specify the email address that receives the reports.
define('EMAIL', 'riley@rileybathurst.com');
// Specify the desired email subject for violation reports.
define('SUBJECT', 'CSP violation');

// Send `204 No Content` status code.
http_response_code(204);

// Get the raw POST data.
$data = file_get_contents('php://input');
// Only continue if it’s valid JSON that is not just `null`, `0`, `false` or an
// empty string, i.e. if it could be a CSP violation report.
if ($data = json_decode($data)) {
        // Prettify the JSON-formatted data.
        $data = json_encode(
                $data,
                JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
        );
        // Mail the CSP violation report.
        mail(EMAIL, SUBJECT, $data, 'Content-Type: text/plain;charset=utf-8');
}

?>