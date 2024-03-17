<div>
    <a href="{{ url()->previous() }}">Назад</a>
    <h1>Group create</h1>
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
        .form-control{
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
    <form action="/groups" method="post">
        @csrf
        <div class="form-group">
            <label for="title" class="label label-title">Введите название группы</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Группа FS-01" required>

            <label for="start_from" class="label label-start_from">Введите дату начала обучения</label>
            <input type="date" name="start_from" id="start_from" class="form-control" required>

            <label for="is_active" class="label label-start_from">
                <input type="checkbox" value="1" name="is_active" id="is_active" class="form-control" style="width: 20px!important;">
                Начала ли группа свое обучение
            </label>


            <button type="submit" class="btn btn-success">Создать группу</button>
        </div>
    </form>
</div>
