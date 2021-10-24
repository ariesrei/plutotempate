<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <style>
        *, html, body {
            background-color: #999;
        }
        
        .container {
            width:800px;
            margin: 0 auto;
            text-align: center;
        }
        h1 {
            font-size: 30rem;
            margin: 0;
            text-shadow: 15px 10px 0 #ea623d;
            line-height: 1em;
        }
        h2 {
            font-weight: bold;
            margin: 0;
            padding: 10px 0 20px;
        }
        a {
            text-transform: uppercase;
            font-weight: bold;
            text-decoration: none;
            color: #111;
            padding: 10px;
            border: 1px #111 solid;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <h2 style="">Page Not Found</h2>
        <a href="<?=site_url()?>">Return home</a>
    </div>
</body>
</html>