<?php
include "../connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // SQL query to get the total number of quizzes with odd number of items
    $queryTotalOddItems = "SELECT COUNT(*) AS Total_Quizzes_With_Odd_Items FROM tblquizcontainer WHERE MOD(Number_of_Items, 2) <> 0";
    
    // SQL query to get the average number of items in quizzes with odd number of items
    $queryAverageOddItems = "SELECT AVG(Number_of_Items) AS Average_Number_of_Quizzes_With_Odd_Items FROM tblquizcontainer WHERE MOD(Number_of_Items, 2) <> 0";

    // Execute the first query
    $resultTotalOddItems = $connection->query($queryTotalOddItems);
    if ($resultTotalOddItems->num_rows > 0) {
        $rowTotalOddItems = $resultTotalOddItems->fetch_assoc();
        $totalOddItems = $rowTotalOddItems['Total_Quizzes_With_Odd_Items'];
    } else {
        $totalOddItems = 0; // Default value if no results
    }

    // Execute the second query
    $resultAverageOddItems = $connection->query($queryAverageOddItems);
    if ($resultAverageOddItems->num_rows > 0) {
        $rowAverageOddItems = $resultAverageOddItems->fetch_assoc();
        $averageOddItems = $rowAverageOddItems['Average_Number_of_Quizzes_With_Odd_Items'];
    } else {
        $averageOddItems = 0; // Default value if no results
    }

    // Prepare the results as an associative array
    $results = array(
        "Total_Quizzes_With_Odd_Items" => $totalOddItems,
        "Average_Number_of_Quizzes_With_Odd_Items" => $averageOddItems
    );

    // Output the results as JSON
    echo json_encode($results);
}

// Close the database connection
$connection->close();
?>
