<?php
$page_path = $_GET['page'];

// Replace 'UA-XXXXX-Y' with your Google Analytics tracking ID
$ga_url = "https://www.googleapis.com/analytics/v1/data/ga?ids=ga:$your_property_id&start-date=7daysAgo&end-date=today&metrics=ga:pageviews&filters=ga:pagePath%3D$page_path&key=your_api_key";

$response = file_get_contents($ga_url);
$data = json_decode($response, true);

echo json_encode(["view_count" => $data['totals'][0]['value']]);
?>
