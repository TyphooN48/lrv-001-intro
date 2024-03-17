<div>
    <a href="{{ url()->previous() }}">Назад</a>
    @if(isset($student->id) && isset($group->id))
    <h1>About student id  {{ $student->id }}</h1>
    <ul>
        <li><b>Name: </b> {{ $student->name }}</li>
        <li><b>Surname: </b> {{ $student->surname }}</li>
        <li><b>Group ID: </b> {{ $group->id }}</li>
        <li><b>Group name: </b> {{ $group->title }}</li>
        <li><b>Created at: </b> {{ $student->created_at }}</li>
        <li><b>Updated at: </b> {{ $student->updated_at }}</li>
    </ul>
    @else
        <h3>Error student or group id</h3>
    @endif
</div>
