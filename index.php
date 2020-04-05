<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #content{
            width: 450px;
            margin-left: 480px;
            padding: 20px 20px 20px;
            background: white;
            border: 2px solid navy;
            margin-top: 10px;
        }

        h1{
            color: navy;
        }

        label{
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input{
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }
        #buttons{
            margin-bottom: 15px;
        }

        #buttons input{
            float: left;
            margin-bottom: .5em;
        }
        br{
            clear: left;
        }
    </style>
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form action="display_discount.php" method="POST">
        <div id="data">
        <label>Product Description:</label>
        <input type="text" name="infoproduct"><br>
        <label>List Price:</label>
        <input type="text" name="price" ><br>
        <label>Discount Percent:</label>
        <input type="text" name="discount" placeholder="%"><br>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" name="submit" value="Calculate Discount"/>
        </div>
    </form>
</div>
</body>
</html>
