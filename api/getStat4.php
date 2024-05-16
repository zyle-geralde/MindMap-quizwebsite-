<?php
include "../connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // SQL query to get the total number of folders with 0 items
    $queryTotalZeroItems = "SELECT COUNT(*) AS Total_Folders_With_Zero_Items FROM tblfolder WHERE Number_of_Items > 0";
    
    // SQL query to get the average number of items in folders with more than 0 items
    $queryAverageNonZeroItems = "SELECT AVG(Number_of_Items) AS Average_Number_of_Items FROM tblfolder WHERE Number_of_Items > 0";

    // Execute the first query
    $resultTotalZeroItems = $connection->query($queryTotalZeroItems);
    if ($resultTotalZeroItems->num_rows > 0) {
        $rowTotalZeroItems = $resultTotalZeroItems->fetch_assoc();
        $totalZeroItems = $rowTotalZeroItems['Total_Folders_With_Zero_Items'];
    } else {
        $totalZeroItems = 0; // Default value if no results
    }

    // Execute the second query
    $resultAverageNonZeroItems = $connection->query($queryAverageNonZeroItems);
    if ($resultAverageNonZeroItems->num_rows > 0) {
        $rowAverageNonZeroItems = $resultAverageNonZeroItems->fetch_assoc();
        $averageNonZeroItems = $rowAverageNonZeroItems['Average_Number_of_Items'];
    } else {
        $averageNonZeroItems = 0; // Default value if no results
    }

    // Prepare the results as an associative array
    $results = array(
        "Total_Folders_With_Zero_Items" => $totalZeroItems,
        "Average_Number_of_Items" => $averageNonZeroItems
    );

    // Output the results as JSON
    echo json_encode($results);
}

// Close the database connection
$connection->close();
?>