<?php
    include "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Prepare and bind to prevent SQL injection
        $stmt = $connection->prepare("SELECT Number_of_Items FROM tblfolder WHERE Folder_Id = ?");
        $stmt->bind_param("s", $_POST["fid"]);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $numberofItems = $row["Number_of_Items"] + 1;

            // Update the number of items
            $updateStmt = $connection->prepare("UPDATE tblfolder SET Number_of_Items = ? WHERE Folder_Id = ?");
            $updateStmt->bind_param("is", $numberofItems, $_POST["fid"]);
            $updateStmt->execute();

            if ($updateStmt->affected_rows > 0) {
                echo "Update successful!";
            } else {
                echo "Update failed!";
            }
        } else {
            echo "Folder not found!";
        }

        $stmt->close();
        $updateStmt->close();
        $connection->close();
    }
?>
