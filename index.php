<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $rollNo = $_POST["rollNo"];
    $studName = $_POST["studName"];
    $studDept = $_POST["studDept"];
    $passingYear = $_POST["passingYear"];
    $classGrades = $_POST["classGrades"];

    // Display the result
    $result = "Roll No: $rollNo<br>Name: $studName<br>Department: $studDept<br>Passing Year: $passingYear<br>Class Grades: $classGrades";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Student Information Form</title>
</head>
<body>
    <div class="container">
        <h2>Student Information Form</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="rollNo">Roll No:</label>
            <input type="text" name="rollNo" required>

            <label for="studName">Student Name:</label>
            <input type="text" name="studName" required>

            <label for="studDept">Department:</label>
            <input type="text" name="studDept" required>

            <label for="passingYear">Passing Year:</label>
            <input type="text" name="passingYear" required>

            <label for="classGrades">Class Grades:</label>
            <select name="classGrades" required>
                <option value="First Class">First Class</option>
                <option value="Second Class">Second Class</option>
                <option value="Pass">Pass</option>
            </select>

            <button type="submit">Submit</button>
        </form>

        <?php
        if (isset($result)) {
            echo '<div class="result">' . $result . '</div>';
        }
        ?>
    </div>
</body>
</html>
