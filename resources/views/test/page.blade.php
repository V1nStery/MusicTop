{{ $id }}

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>birthDate</th>
            </tr>
        </thead>
        <tr>
            @foreach ($data as $a )
            @if ($loop->first)
            <small>1st</small>
            <td>{{$a['id']}}</td>
            <td>{{$a['firstname']}}</td>
            <td>{{$a['lastname']}}</td>
            <td>{{$a['email']}}</td>
            <td>{{$a['birthDate']}}</td>
            @endif
            @endforeach
        </tr>
        <tr>
            @foreach ($data as $a )
            @if ($a['id'] == 2)
            <small>1st</small>
            <td>{{$a['id']}}</td>
            <td>{{$a['firstname']}}</td>
            <td>{{$a['lastname']}}</td>
            <td>{{$a['email']}}</td>
            <td>{{$a['birthDate']}}</td>
            @endif
            @endforeach
        </tr>
        <tr>
            @foreach ($data as $a )
            @if ($a['id'] == 3)
            <small>1st</small>
            <td>{{$a['id']}}</td>
            <td>{{$a['firstname']}}</td>
            <td>{{$a['lastname']}}</td>
            <td>{{$a['email']}}</td>
            <td>{{$a['birthDate']}}</td>
            @endif
            @endforeach
        </tr>
        <tr>
            @foreach ($data as $a )
            @if ($a['id'] == 4)
            <small>1st</small>
            <td>{{$a['id']}}</td>
            <td>{{$a['firstname']}}</td>
            <td>{{$a['lastname']}}</td>
            <td>{{$a['email']}}</td>
            <td>{{$a['birthDate']}}</td>
            @endif
            @endforeach
        </tr>
        <tr>
            @foreach ($data as $a )
            @if ($a['id'] == 5)
            <small>1st</small>
            <td>{{$a['id']}}</td>
            <td>{{$a['firstname']}}</td>
            <td>{{$a['lastname']}}</td>
            <td>{{$a['email']}}</td>
            <td>{{$a['birthDate']}}</td>
            @endif
            @endforeach
        </tr>
        <tr>
            @foreach ($data as $a )
            @if ($a['id'] == 6)
            <small>1st</small>
            <td>{{$a['id']}}</td>
            <td>{{$a['firstname']}}</td>
            <td>{{$a['lastname']}}</td>
            <td>{{$a['email']}}</td>
            <td>{{$a['birthDate']}}</td>
            @endif
            @endforeach
        </tr>
        <tr>
            @foreach ($data as $a )
            @if ($a['id'] == 7)
            <small>1st</small>
            <td>{{$a['id']}}</td>
            <td>{{$a['firstname']}}</td>
            <td>{{$a['lastname']}}</td>
            <td>{{$a['email']}}</td>
            <td>{{$a['birthDate']}}</td>
            @endif
            @endforeach
        </tr>
    </table>
        {{-- @foreach ($data as $a )
        <li>
            {{ print_r($a)}}
            @if ($loop->first)
            <small>1st</small>
            @endif
        </li>
        @endforeach --}}
