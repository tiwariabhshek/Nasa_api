<?php
function Processing($results)
{   $results = json_decode($results);
    
    if (is_array($results)) {
        foreach($results as $key => $result){
            printResult($result);
        }
        
    } else {
        $result = $results;
        printResult($result);

    }
}

function printResult($result){
    $hdurl = $result->hdurl;
    $copyright = $result->copyright;
    $name = $result->url;
    $date = $result->date;
    $title = $result->title;
    $explanation = $result->explanation;
    $pattern = "/\/([^\/?#]+)(?:[?#]|.jpg$)/i";
    echo '<img src="' . $hdurl . '" alt="Image" height="100%vw" width="100%">';
    if (preg_match($pattern, $name, $matches)) {

        echo "Name:" . $matches[1];
    } else {
        echo "No match found.<br>";
    }

    echo "copyright:" . $copyright . "<br>";
    echo "Date:" . $date . "<br>";
    echo "Title:" . $title . "<br>";
    echo "Explanation:" . $explanation;
}
