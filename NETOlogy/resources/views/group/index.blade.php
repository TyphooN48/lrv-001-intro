<div>
    <a href="{{ url()->previous() }}">Назад</a>
    <h1>All Groups</h1>
    <style>
        .Groups {
            text-align: center;
            border-collapse: collapse;
        }
        .Groups_header {
            font-weight: bold;
        }
        .Groups_col {
            border: 1px solid black;
            padding: 5px 10px;
        }
    </style>
    <table class="Groups">
        <thead class="Groups_header">
        <tr>
            <td class="Groups_col">ID</td>
            <td class="Groups_col">Title</td>
            <td class="Groups_col">Start from</td>
            <td class="Groups_col">Active</td>
            <td class="Groups_col">Created at</td>
            <td class="Groups_col">Updated at</td>
        </tr>
        </thead>
        @if (count($groups))
            @foreach($groups as $key=>$value)
                <tr class="Groups_row">
                    <td class="Groups_col">{{ $value->id }}</td>
                    <td class="Groups_col"><a href="{{url("/groups/$value->id")}}">{{ $value->title }}</a></td>
                    <td class="Groups_col">{{ $value->start_from }}</td>
                    <td class="Groups_col">{{ $value->is_active }}</td>
                    <td class="Groups_col">{{ $value->created_at }}</td>
                    <td class="Groups_col">{{ $value->updated_at }}</td>
                </tr>
            @endforeach
        @else
            <tr class="Groups_row">
                <td class="Groups_col" colspan="6">No groups</td>
            </tr>
        @endif
    </table>

    <a href="{{url('/groups/create')}}">Создать группу</a>
</div>
