<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="files.php" method="POST" enctype="multipart/form-data">
        Select file: <input type="file" name="myfile" required>
        <br><br>
        <input type="submit" name="submit" value="Upload">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["myfile"]["name"]);
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "txt", "docx");

        if ($_FILES["myfile"]["size"] > 2 * 1024 * 1024) {
            echo "❌ File is too large. Max size is 2MB.<br>";
            $uploadOk = 0;
        }

        if (!in_array($fileType, $allowedTypes)) {
            echo "❌ Only JPG, PNG, GIF, PDF, TXT, and DOCX files are allowed.<br>";
            $uploadOk = 0;
        }

        if ($uploadOk) {
            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0777, true); 
            }

            if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
                echo "✅ The file <strong>" . htmlspecialchars(basename($_FILES["myfile"]["name"])) . "</strong> has been uploaded.";
            } else {
                echo "❌ Sorry, there was an error uploading your file.";
            }
        }
    }
    ?>
</body>
</html>
