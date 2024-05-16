<?php
include "../connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Query to get the total number of quizzes with an even number of items
    $queryTotalEvenItems = "SELECT COUNT(*) AS Total_Quizzes_With_Even_Items FROM tblquizcontainer WHERE MOD(Number_of_Items, 2) = 0";

    // Query to get the average number of items in quizzes with an even number of items
    $queryAverageEvenItems = "SELECT AVG(Number_of_Items) AS Average_Number_of_Quizzes_With_Even_Items FROM tblquizcontainer WHERE MOD(Number_of_Items, 2) = 0";

    // Execute the queries
    $resultTotalEvenItems = $connection->query($queryTotalEvenItems);
    $resultAverageEvenItems = $connection->query($queryAverageEvenItems);

    // Check if the queries executed successfully
    if ($resultTotalEvenItems && $resultAverageEvenItems) {
        // Fetch the results
        $rowTotalEvenItems = $resultTotalEvenItems->fetch_assoc();
        $rowAverageEvenItems = $resultAverageEvenItems->fetch_assoc();

        // Prepare the data as an associative array
        $data = array(
            "Total_Quizzes_With_Even_Items" => $rowTotalEvenItems['Total_Quizzes_With_Even_Items'],
            "Average_Number_of_Quizzes_With_Even_Items" => $rowAverageEvenItems['Average_Number_of_Quizzes_With_Even_Items']
        );

        // Encode the data as JSON and output it
        echo json_encode($data);
    } else {
        // Handle query execution errors
        echo json_encode(array("error" => "Failed to execute queries."));
    }
}

// Close the database connection
$connection->close();
?>
