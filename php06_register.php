<!DOCTYPE html>
<html lang="en">
<head>
<style>
     td {
  border: 1px solid;
}      
    #addtext {
        color: red;
        display: flex;
        justify-content: center;
        margin-top: 20px;
        font-weight: bold;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div>
    <table width="300px" style="margin: 0 auto;">
    <form action="process_register.php" method="POST" >
        <tr>
            <td style="text-align: right;">Username</td>
            <td><input type="text" name="text01" id="text01"/></td>
        </tr>
        <tr>
            <td style="text-align: right;">Password</td>
            <td><input type="password" name="text02" id="text02"/></td>
        </tr>

        <tr>
            <td style="text-align: right;">Confirm Password</td>
            <td><input type="password" name="text03" id="text03"/></td>
        </tr>
  
        <tr>
            <td style="text-align: right;">ชื่อ</td>
            <td><input type="text" name="text04" id="text04"/></td>
        </tr>

        <tr>
            <td style="text-align: right;">นามสกุล</td>
            <td><input type="text" name="text05" id="text05"/></td>
        </tr>
        <tr>
            <td style="text-align: right;">เบอร์โทร</td>
            <td><input type="text" name="text06" id="text06" maxlength="10"/></td>
        </tr>
        <tr>
            <td style="text-align: right;">Email</td>
            <td><input type="text" name="text08" id="text08"/></td>
        </tr>
        <tr>
            <td style="text-align: right;">บัตรประชาชน</td>
            <td><input type="text" name="text07" id="text07" maxlength="13" /></td>
        </tr>
        <tr>
            <td style="text-align: right;">Submit</td>
            <td><button type="submit" name="submit" id="btn" value="submit" onclick="return checkClick();">Submit</button> </td>
        </tr>
        
    </form>
    
    </table>
    </div>
    <div id="addtext">
        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function checkClick() {
            var username = $("#text01").val();
            var password = $("#text02").val();
            var confirmPassword = $('#text03').val();
            var firstname = $('#text04').val();
            var lastname = $('#text05').val();
            var phone = $('#text06').val(); 
            var email = $('#text08').val();
            var id_card = $('#text07').val();
            let para = document.createElement("span")
       
            var rex_username = /^[A-Za-z0-9]{4,12}$/;
            var rex_password = /^[A-Za-z0-9]{4,12}$/;
            var rex_name = /^[A-Za-z]{2,20}$/;
            var rex_phone = /^[0-9]{2,10}$/;
            var rex_card = /^[0-9]{1,13}$/;
            var rex_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,30}$/;

            if (username == '') {
                para.innerText = "Input username is null";
                $('#addtext').html(para);
                $('#text01').focus();
                return false;
            }
            if (password == '') {
                para.innerText = "Input password is null";
                $('#addtext').html(para);
                $('#text02').focus();
                return false;
            }
            if (confirmPassword == '') {
                para.innerText = "Input confirm Password is null";
                $('#addtext').html(para);
                $('#text03').focus();
                return false;
            }

            if (firstname == '') {
                para.innerText = "Input firstname is null";
                $('#addtext').html(para);
                $('#text04').focus();
                return false;
            }
            if (lastname == '') {
                para.innerText = "Input lastname is null";
                $('#addtext').html(para);
                $('#text05').focus();
                return false;
            }
            if (phone == '') {
                para.innerText = "Input phone is null";
                $('#addtext').html(para);
                $('#text06').focus();
                return false;
            }
            if (email == '') {
                para.innerText = "Input Email is null";
                $('#addtext').html(para);
                $('#text08').focus();
                return false;
            }
            if (id_card == '') {
                para.innerText = "Input ID_CARD is null";
                $('#addtext').html(para);
                $('#text07').focus();
                return false;
            }

            if (rex_username.test(username) == false) {
                para.innerText = "Username wrong pattern";
                $('#addtext').html(para);
                $('#text01').focus();
                return false;
            }
            if (rex_password.test(password) == false) {
                para.innerText = "Password wrong pattern";
                $('#addtext').html(para);
                $('#text02').focus();
                return false;
            }
            if (rex_password.test(confirmPassword) == false) {
                para.innerText = "Confirm Password wrong pattern";
                $('#addtext').html(para);
                $('#text03').focus();
                return false;
            }
            if (rex_name.test(firstname) == false) {
                para.innerText = "Firstname wrong pattern";
                $('#addtext').html(para);
                $('#text04').focus();
                return false;
            }
            if (rex_name.test(lastname) == false) {
                para.innerText = "Lastname wrong pattern";
                $('#addtext').html(para);
                $('#text05').focus();
                return false;
            }
            if (rex_phone.test(phone) == false) {
                para.innerText = "Phone wrong pattern";
                $('#addtext').html(para);
                $('#text06').focus();
                return false;
            }
            if (rex_email.test(email) == false) {
                para.innerText = "Email wrong pattern";
                $('#addtext').html(para);
                $('#text08').focus();
                return false;
            }
            if (rex_card.test(id_card) == false) {
                para.innerText = "ID CARD wrong pattern";
                $('#addtext').html(para);
                $('#text07').focus();
                return false;
            }
        }
    </script>
</body>
</html>
