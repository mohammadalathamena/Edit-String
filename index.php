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
    
<p>Please select Method:</p>
  <input type="radio" id="Levenshtein" name="method" value="1" checked>
  <label for="html">Levenshtein</label><br>
  <input type="radio" id="Hamming" name="method" value="0">
  <label for="css">Hamming</label><br>
 
<input type="text" name="" placeholder="Source String" id="source">
<input type="text" name="" placeholder="Target String" id="target">
<button onclick="sendData()">calculate</button>
<div id="result"></div>
    <script>
        function sendData() {
            $('#result').text('please wait .....') ;
            const url = 'controller.php';
            $.ajax(
                {
                    url:url,
                    method:'post',
                    data:{
                        source:document.getElementById('source').value ,
                        target:document.getElementById('target').value ,
                        type:document.querySelector('input[name="method"]:checked').value
                    },
                    success:(data)=>{
                        $('#result').text(data) ;
                },error:(error)=>{
                    console.log(error);
                    $('#result').text('server can\'t handling this request please try agin with less characters') ;
                },
            });
        }
    </script>
</body>
</html>