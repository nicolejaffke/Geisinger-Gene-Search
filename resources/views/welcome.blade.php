<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Geisinger</title>

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/1866062af8.js" crossorigin="anonymous"></script>

             <link rel="stylesheet" type="text/css" href="{{ asset('/styles.css') }}" >
    </head>

 <body>
     <img src="{{ asset('/Geisinger_logo.jpg') }}" alt="Geisinger Logo">
    <h1> Geisinger Gene Search </h1>
    
     <div class="container my-8 py-5 px-5 mx-5">
    <!-- Search input -->
    <form action="{{ route('search') }}" method="GET">>
        <input type="search" class="form-control" placeholder="Search Gene Name" name="search">
        <button type="submit">Search</button>
    </form>
    <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-outline-dark" type="button">Search <i class="fa-solid fa-magnifying-glass"></i></button>
</div>
<br>
<br>


<h2>Results <i class="fa-solid fa-square-poll-horizontal"></i></h2>
    <!-- List items -->

    @if($data->isNotEmpty())
    @foreach ($data as $data)
        <ul class="list-group mt-3">
        <li class="list-group-item">{{ $data->name }}<</li>
        <li class="list-group-item">{{ $data->location }}</li>
        <li class="list-group-item">{{ $data->symbol }}</li>
    </ul>
    @endforeach 
@else 
    <div>
        <h2>No Gene found</h2>
    </div>
@endif 




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
