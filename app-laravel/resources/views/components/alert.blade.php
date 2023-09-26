<div class="alert alert-danger">
    @if ($errors -> any()) 
        @foreach($errors -> all() as $error)
            <h4 id="error">{{ $error }}</h4>
        @endforeach
    @endif
</div>