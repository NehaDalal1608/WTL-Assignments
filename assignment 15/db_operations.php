<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "nehadalal";
$dbname = "test_db";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['insert'])) {
        // INSERT operation
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        if ($conn->query($sql)) {
            $message = "Record inserted successfully";
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['update'])) {
        // UPDATE operation
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
        if ($conn->query($sql)) {
            $message = "Record updated successfully";
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Fetch all records for display
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Basic Database Operations</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        form { margin-bottom: 20px; }
        .form-group { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Database Operations</h1>
    
    <?php if (isset($message)) echo "<p>$message</p>"; ?>
    
    <h2>Insert Record</h2>
    <form method="post">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <input type="submit" name="insert" value="Insert">
    </form>
    
    <h2>Update Record</h2>
    <form method="post">
        <div class="form-group">
            <label>ID:</label>
            <input type="number" name="id" required>
        </div>
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <input type="submit" name="update" value="Update">
    </form>
    
    <h2>Display Records</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["email"]."</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No records found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>