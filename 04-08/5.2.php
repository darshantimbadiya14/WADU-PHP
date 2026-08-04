<!-- 5.2 Create a XMLHttpRequest with a callback function, and retrieve data from a TXT file. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button onclick="loadTextFile('data.txt', showResult)">Load Text File</button>
    <p id="display"></p>

    <script>
        function loadTextFile(url, callback) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    callback(xhr);
                }
            }

            xhr.send();
        }

        function showResult(xhr) {
            document.getElementById("display").innerHTML = xhr.responseText;
        }
    </script>
</body>

</html>
