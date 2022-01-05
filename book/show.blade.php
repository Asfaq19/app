<div>
    <h1>Detail of <span style="color:red">{{$reader->name}}</span> </h1>

    <div style="float:left;margin-right: 10px;">
        <button>
            <a href="/readers/{{$reader->id}}/edit" style="text-decoration: none;color:black">
                Edit
            </a>
        </button>
    </div>

    <div style="float:left">
        <form action="/readers/{{$reader->id}}" method="POST">    
            @method('DELETE')
            @csrf
            <button type="submit">Delete</button>

        </form>
    </div>


    <br>
    <div style="float:left;margin-left: 10px;" >
        <p><strong>Id: </strong>{{ $reader->id}}</p>
        <p><strong>Name: </strong>{{ $reader->name}}</p>        
    </div>

</div>