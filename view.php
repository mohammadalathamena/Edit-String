<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="result">

    </div>
    <input type="text" name="" placeholder="Source String" id="source">
    <input type="text" name="" placeholder="Target String" id="target">
    <button onclick="sendData()">calculate</button>
    <script>
        function sendData() {
            $.ajax('/index.php',   // request url
                {
                    method:'post',
                    data:{
                        source:document.getElementById('source').value ,
                        target:document.getElementById('target').value ,
                        type:0
                    },
                    success: function (data, status, xhr) {// success callback function
                    console.log(data);
                        $('#result').text(data) ;
                }
            });
        }
    </script>
</body>
</html>