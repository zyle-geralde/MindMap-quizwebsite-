<?php
include "../connect.php";
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (true) {
        $query = "SELECT COUNT(*) AS total_count, AVG(Number_of_Items) AS average_number_of_quizzes 
                  FROM tblquizcontainer 
                  WHERE Quiz_Type = 'Mult'";
        
        $result = mysqli_query($connection, $query);

        $query = "SELECT COUNT(*) AS total_count, AVG(Number_of_Items) AS average_number_of_quizzes 
        FROM tblquizcontainer 
        WHERE Quiz_Type = 'Flash'";

        $result2 = mysqli_query($connection, $query);

        $query = "SELECT 
        (SELECT COUNT(*) FROM tblfolder WHERE Number_of_Items = '0') AS total_count,
        (SELECT AVG(Number_of_Items) FROM tblfolder WHERE Folder_Name LIKE 'a%') AS average_number_of_folder_starts_letter";

        $result3 = mysqli_query($connection, $query);

        if ($result && $result2 && $result3) {
            $row = mysqli_fetch_assoc($result);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);

            $response1 = array(
                'total_number_mult' => $row['total_count'],
                'average_mult' => $row['average_number_of_quizzes'],
                'total_number_flash' => $row2['total_count'],
                'average_flash' => $row2['average_number_of_quizzes'],
                'total_number_folders' => $row3['total_count'],
                'average_folders' => $row3['average_number_of_folder_starts_letter']
            );  

            $records = array();
            $records[0] = $response1;

            echo json_encode($records);
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
}
?>


