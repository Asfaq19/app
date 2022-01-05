<div>

    <h1 style="margin-left:100px">Edit details for {{$reader->name}}</h1>
    
    <form action="/readers/{{$reader->id}}" method="POST"> 
        
        @method('PATCH')

        @include('book.form')

        <button type="submit">Save Value</button>

    </form>

</div>