<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customer Profile Page</title>
    </head>
    <style>
        body{
                background-color:rgb(223,223,242);
                }
                .my-font{
                font-size:30px;
                font-family:consolas;
                }
                .btn-mine{
                border:none;
                color:white;
                width:98%;
                background-color:rgb(185,143,221);
                border-radius:3px;
                padding:15px;
                margin-top:15px;
            }
            .btn-mine:hover{
                background-color:rgb(111,77,145);
            }
            .btn-mine:active{
                background-color:rgb(97,15,115);
            }
    </style>
    <body>
        <div class="my-font "><fieldset>
            <legend align="center"><h1>Customer Profile</h1></legend>
                <table align="center", border ="3" cellpadding="20", cellspacing="5">
                    <tr>
                        <th> First Name</th>
                        <td> Nahinul</td>
                    </tr>
                   <tr>
                       <th> Last Name</th>
                       <td> Abedin</td>
                   </tr>
                   <tr>
                       <th> Username </th>
                       <td> Nahin</td>
                   </tr>
                    <tr>
                        <th> Email</th>
                        <td> nahin@gmail.com</td>
                    </tr>
                   <tr>
                       <th> Address</th>
                       <td> Ka-45,Southpara,Mohakhali,Banani,Dhaka-1213</td>
                   </tr>
                    <tr>
                        <th> Joining Date</th>
                        <td> 7.12.2018</td>
                    </tr>
                    <tr>
                        <th> NID</th>
                        <td> 7364534543</td>
                    </tr>
                    <tr>
                        <th> Description</th>
                        <td> It's me.......</td>
                    </tr>
                    </tr>
                </table>
             <div align="center" class="btn-mine">
             <form align="center" action="/updateprofile3">
            <input type="submit" value="Update Profile" />
            </form>
            </div>
            </legend>
        </fieldset>
        </div>
    </body>
</html>