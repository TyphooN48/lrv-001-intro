<div>
    <a href="{{ url()->previous() }}">Назад</a>
    @if(isset($group->id))
        <h1>Student create in group {{ $group->title }}</h1>
        <style>
            .form-group {
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
            }

            .label {
                font-weight: bold;
                margin-bottom: 5px;
            }

            .form-control {
                width: 300px;
                padding: 5px;
                margin-bottom: 10px
            }

            .btn {
                border: none;
                cursor: pointer;
                font-family: inherit;
                font-size: 100%;
                width: 150px;
                background-color: green;
                border-radius: 10px;
                color: white;
                transition: box-shadow 0.3s ease-out;
                padding: 8px 10px;
            }

            .btn:hover {
                box-shadow: 0 0 0 1px green inset, 0 0 0 3px white inset;
            }
        </style>
        <form action="/groups/{{ $group->id }}/students" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" name="group_id" value="{{ $group->id }}">
                <label for="surname" class="label label-surname">Введите фамилию студента</label>
                <input type="text" name="surname" id="surname" class="form-control" placeholder="Иванов" required>

                <label for="name" class="label label-name">Введите имя студента</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Иван" required>

                <button type="submit" class="btn btn-success">Добавить студента</button>
            </div>
        </form>
    @else
        <h2>No group find</h2>
    @endif
</div>
