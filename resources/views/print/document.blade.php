<!-- resources/views/print/document.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Document</title>

    <!-- Include any styles needed for your document -->
    <style>
        body {
            font-family: Arial, sans-serif;
            /* Add more styles as needed */
        }

        /* Add print-specific styles here */
        @media print {
            /* Your print styles go here */
        }
    </style>
</head>
<body>
    <div>
        <h1>Printable Document</h1>
        <p>{{ $content }}</p>
    </div>
</body>
</html>
