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
        
        <h1 >Summation</h1>
        <a href="/add/create" style="margin-top:10px" >Add Sum</a>
        
        @foreach($data as $d)
            <hr>
            <p style="float:left;margin-right:10px" >{{ $d->a }}</p>
            <p style="float:left;margin-right:10px">{{ $d->b }}</p>         
            <p style="float:left;margin-right:10px">{{ $d->c }}</p>         
            <p style="float:left;margin-right:10px">{{ $d->d }}</p>         
            <p style="float:left;margin-right:10px">{{ $d->e }}</p>         
            <p style="float:left;margin-right:10px">{{ $d->f }}</p>         
            <p style="float:left;margin-right:10px">{{ $d->sum }}</p> 
            
            <form method="POST" action="/add/{{$d->id}}">
                @csrf 
                @method('DELETE')

                <button style="margin-top:12px" >Delete</button>
            </form>       
        @endforeach
    </div>

</body>

</html>