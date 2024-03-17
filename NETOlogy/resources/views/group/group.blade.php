<div>
    <style>
        .Student {
            text-align: center;
            border-collapse: collapse;
        }

        .Student_header {
            font-weight: bold;
        }

        .Student_col {
            border: 1px solid black;
            padding: 5px 10px;
        }
    </style>
    <a href="{{ url()->previous() }}">Назад</a>
    @if(isset($group->id))
        <h1>About group id {{ $group->id }}</h1>
        <ul>
            <li><b>Name: </b> {{ $group->title }}</li>
            <li><b>Start from: </b> {{ $group->start_from }}</li>
            <li><b>Is active: </b> {{ $group->is_active }}</li>
            <li><b>Created at: </b> {{ $group->created_at }}</li>
            <li><b>Updated at: </b> {{ $group->updated_at }}</li>
        </ul>
        <h2>Student in group</h2>
        <table class="Student">
            <thead class="Student_header">
            <tr>
                <td class="Student_col">ID</td>
                <td class="Student_col">Surname</td>
                <td class="Student_col">Name</td>
            </tr>
            </thead>
            @if (count($students))
                @foreach($students as $key=>$value)
                    <tr class="Student_row">
                        <td class="Student_col">{{ $value->id }}</td>
                        <td class="Student_col"><a href="{{url("/groups/$group->id/students/$value->id")}}">{{ $value->surname }}</a></td>
                        <td class="Student_col">{{ $value->name }}</td>
                    </tr>
                @endforeach
            @else
                <tr class="Student_row">
                    <td class="Student_col" colspan="3">No student</td>
                </tr>
            @endif
        </table>
        <a href='{{url("/groups/$group->id/students/create")}}'>Добавить студента в группу</a>
    @else
        <h3>No group find</h3>
    @endif
</div>


