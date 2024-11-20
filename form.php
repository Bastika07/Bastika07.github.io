<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Mail Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Your Custom Mail Form</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fields'])) {
        $fields = $_POST['fields'];
    ?>

    <form id="emailForm">
        <?php foreach ($fields as $field): ?>
            <div>
                <label for="<?php echo strtolower($field); ?>"><?php echo $field; ?>:</label>
                <?php if (strtolower($field) === "message"): ?>
                    <textarea name="<?php echo strtolower($field); ?>" id="<?php echo strtolower($field); ?>" required></textarea>
                <?php else: ?>
                    <input type="text" name="<?php echo strtolower($field); ?>" id="<?php echo strtolower($field); ?>" required>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <button type="button" onclick="sendEmail()">Send Email</button>
    </form>

    <script>
        function sendEmail() {
            const form = document.getElementById('emailForm');
            const formData = new FormData(form);
            let mailtoBody = "";

            // Loop through form data to build the mail body
            formData.forEach((value, key) => {
                mailtoBody += `${key.charAt(0).toUpperCase() + key.slice(1)}: ${value}\n`;
            });

            // Encode the body and subject
            const encodedBody = encodeURIComponent(mailtoBody);
            const subject = encodeURIComponent("Custom Form Submission");

            // Trigger mailto
            window.location.href = `mailto:sebastian@familie-luebke.com?subject=${subject}&body=${encodedBody}`;
        }
    </script>

    <?php
    } else {
        echo "<p>No fields selected. <a href='index.php'>Go back</a> and try again.</p>";
    }
    ?>
</body>
</html>

