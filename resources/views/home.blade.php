
{{-- @php
    $user = [
        'name' => 'Dario',
        'lastname' => 'Rossi',
    ];

    $list = ['momento di silenzio','pov: Nick bestemmia','cit Florian:che succede?'];
@endphp --}}

<h1>Hello world da parte di {{ $user['name'].' '. $user['lastname'] }}</h1>

<p>Storia breve ma intensa</p>
    
<ul>
    @foreach ($list as $elemento)
        <li>
            <a href="">{{$elemento}}</a>
        </li>    
    @endforeach
</ul>