<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div style="width: 900px;">
        
        <form method="POST" action="/add" >

            @csrf

            <div class="mb-4"> 
                Value of a: 
                <input id="title" name="a">

            </div>

            <div class="mb-4">
                 Value of b: 
                <input id="title" name="b">

            </div>

            <div class="mb-4"> 
                Value of c: 
                <input id="title" name="c">

            </div>

            <div class="mb-4">
                 Value of d: 
                <input id="title" name="d">

            </div>

            <div class="mb-4"> 
                Value of e: 
                <input id="title" name="e">

            </div>

            <div class="mb-4">
                 Value of f: 
                <input id="title" name="f">

            </div>

            <button style="margin-top:10px">Create</button>

        </form>    

    </div>

</body>

</html>