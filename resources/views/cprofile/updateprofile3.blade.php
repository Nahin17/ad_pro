<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Profile</title>
    </head>
    <style>
        body{
                background-color:rgb(223,223,242);
                }
                .my-font{
                font-size:30px;
                font-family:consolas;
                }
    </style>
    <body>
        <div class="my-font ">
        <fieldset>
            <legend align="center"><h1> Update Profile </h1></legend>
            <form align="center" action="/profile3">
           
                <p><label for="fname">  First Name :
                <input  type="text" id="fname "name="fname"></p>
                <p><label for="lname">  Last Name :
                <input  type="text" id="lname "name="lname"></p>
                <p><label for="uname">  User Name :
                <input type="text" id="uname "name="uname"></p>
                <p><label for="jdate">  Joining Date :
                <input type="number" id="jdate"name="jdate"></p>
                <p><label for="add"> Address :
                <input type="text" id="add"name="add"></p>
                <p><label for="email">  Email :
                <input  type="email" id="email "name="email"></p>
                <p><label for="dis">Discription :
                <textarea placeholder=""></textarea></p>
                <p><input type="submit" value="Update Profile" /></p>
        </fieldset>
        </div>
            </form>
    </body>
</html>