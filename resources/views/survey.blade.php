<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Form Generator</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <form id="dynamicForm"></form>

    <!-- Access processed data in JavaScript -->
    <script>
        var jsonData2 = @json($data);
        console.log(jsonData2);
        // Use jsonData in your JavaScript logic
    </script>

    <script src="js/dynamic_survey.js"></script>
</body>
</html>
