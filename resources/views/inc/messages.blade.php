@if ($errors->any())
    
            @foreach ($errors->all() as $error)
            <div class=" container alert alert-danger">             
                <p>{{ $error }}</p>        
           </div>
            @endforeach
      
@endif
{{-- Session success--}}
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif
{{--Session errors--}}
@if(session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
@endif