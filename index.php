<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Mail Form Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Generate a Mail Form</h1>
    <form action="form.php" method="POST">
        <h2>Select the fields to include:</h2>
        <div>
            <label><input type="checkbox" name="fields[]" value="Name"> Name</label>
        </div>
        <div>
            <label><input type="checkbox" name="fields[]" value="Email"> Email</label>
        </div>
        <div>
            <label><input type="checkbox" name="fields[]" value="Phone"> Phone</label>
        </div>
        <div>
            <label><input type="checkbox" name="fields[]" value="Message"> Message</label>
        </div>
        <button type="submit">Generate Form</button>
    </form>
</body>
</html>

