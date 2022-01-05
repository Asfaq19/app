<div>
    
    <h1 style="margin-left:100px">Customers List</h1>

    <p> <a href="readers/create">Add New Readers</a> </p>

    <div>

        @foreach($readers as $reader)

            <div> <a href="readers/{{ $reader->id }}">{{ $reader->name }}</a> </div>

            <div  style="float:left;margin-right:5px">
                <button>
                    <a href="/readers/{{$reader->id}}/edit" style="text-decoration: none;color:black">
                        Edit
                    </a>
                </button>
            </div>

            <div>
                <form action="/readers/{{$reader->id}}" method="POST">
                    
                    @method('DELETE')
                    
                    @csrf


                    <button type="submit">Delete</button>

                </form>
            </div>

        @endforeach

    </div>

</div>