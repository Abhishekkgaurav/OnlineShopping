<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script>
            function validate()
            {
                ob1=document.getElementById("p1");
                a1=ob1.value;
                ob2=document.getElementById("p2");
                a2=ob.value;
                if(a1==a2)
                  return true;
              else
              {
                  
              }
            }
            </script>
        
        <form>
            <label>Enter Password</label>
            <input type="password" name="pass" id="p1" value=""/>
            <label>Confirm Password</label>
            <input type="password" name="pass1" id="p2" value=""/>
            <input type="submit" name="submitbtn" value=""/>
        </form>
    </body>
</html>
