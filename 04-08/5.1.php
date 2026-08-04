<!-- 5.1 Create a simple XMLHttpRequest, and retrieve data from a TXT file. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button onclick="loadTextFile()">Load Text File</button>
    <p id="display"></p>

    <script>
        function loadTextFile() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'data.txt', true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("display").innerHTML = xhr.responseText;
                }
            }

            xhr.send();

        }
    </script>
</body>

</html>