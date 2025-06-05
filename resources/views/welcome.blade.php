Hello there! 


@if ($errors)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error->first() }}</li>
            @endforeach
        </ul>
    </div> 
    
@else
    No Errors! 


@endif