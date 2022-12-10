<?php
$body = '<html><body>';

    $body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
    $body .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
    $body .= "<tr><td><strong>Phone:</strong> </td><td>" . $phone . "</td></tr>";
    $body .= "<tr><td><strong>Project Requirement:</strong> </td><td>" . $message . "</td></tr>";


    $body .= "</table>";
    $body .= "</body></html>";
    echo $body;
    ?>
