@extends('layouts.app')

@section('title', 'Efiboard - Página inicial')

@section('content')
    <section>
        {{-- ROTA GET USER --}}
        <p>{{$userData['user']['id']}}</p>
        <p>{{$userData['user']['username']}}</p>
        <p>{{$userData['user']['email']}}</p>
        <p style="width: 20px; height: 20px; border-radius: 100%; background-color:{{$userData['user']['color']}}"></p>
        <img src="{{$userData['user']['profilePicture']}}">
        <p>{{$userData['user']['initials']}}</p>
    
        {{-- ROTA GET TEAM USER TASKS --}}
        @foreach ($tasksData['tasks'] as $item)
            <p>{{$item['id']}}</p>
            <p>{{$item['name']}}</p>
            <p>{{$item['description']}}</p>
            <p>{{$item['creator']['username']}}</p>

            <p>{{$item['status']['status']}}</p>
            <p style="width: 20px; height: 20px; border-radius: 100%; background-color:{{$item['status']['color']}}"></p>

            
            @foreach ($item['assignees'] as $assignee)
                <p>{{$assignee['username']}}</p>
            @endforeach

            @foreach ($item['tags'] as $tag)
                <p>{{$tag['name']}}</p>
            @endforeach

            <?php 
                if (isset($item['time_estimate'])) {
                    echo "Tempo esperado: " . (date("H:i:s", $item['time_estimate'] / 1000)) . " horas<br /><br />";
                }

                if (isset($item['time_spent'])) {
                    echo "Tempo Gasto: " . (date("H:i:s", $item['time_spent'] / 1000)) . " horas";
                }
            ?>
            <p>-----------------------------</p>
        @endforeach
    </section>
@endsection