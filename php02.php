<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP02</title>
    
</head>
<body>
    <span>Input 1 : 
    <input type="number" name ="input" id="input1" value=""></input>
    </span>

    <br/>
    <span>
    Input 2 :
    <input type="number" name ="input" id="input2" value=""></input>
    </span>
</br>
    
    <button type="button" name="button" id="button1" onclick="showResults()">Submit</button>
                <div id="out_put">
        waiting results...
                </div>
   <script>
        function showResults() {
            var input1 = Number(document.getElementById('input1').value); // 
            var input2 = Number(document.getElementById('input2').value);
            var result = input1 + input2;
            document.getElementById("out_put").innerHTML = "Result :" + result
        }
   </script>
</body>
</html>