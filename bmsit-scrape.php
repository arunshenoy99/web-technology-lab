<?php
    // Get the html for the webpage
    $response = file_get_contents("https://bmsit.ac.in/dept/computer-science-and-engineering");
    // Create a new DOM object to help us manipulate the html
    $doc = new DOMDocument();
    // Load the HTML returned from the url into the DOM object
    // Here @ is an error control operator which ignores certain DOM errors present in the webpage
    @$doc->loadHTML($response);
    // The id of Program Outcomes div is collapseFour, find it
    $programOutcomesDiv = $doc->getElementById("collapseFour");
    // Get all li elements in the Program Outcomes div
    $programOutcomesList = $programOutcomesDiv->getElementsByTagName("li");
    // Small words that need not be capitalized
    $smallWords = ["the", "if", "and", "of"];
    foreach($programOutcomesList as $li) {
        // nodeValue gives the text present between the <li></li>
        $content = explode(':', $li->nodeValue);
        // Get the title before the : symbol
        $title = $content[0];
        $words = explode(' ', $title);
        foreach($words as $key=>$word) {
            // If the title word is not a small word capitalize its first letter
            if (!in_array($word, $smallWords)) {
                $words[$key] = ucwords($word);
            }
        }
        $title = implode(' ', $words);
        $title = "<strong>".$title;
        $content[0] = $title;
        $content = implode(':</strong>', $content);
        // Store the result between the <li></li> tags
        $li->nodeValue = $content;
    }
    // Output the modified html to the browser screen
    echo htmlspecialchars_decode(@$doc->saveHTML());
?>