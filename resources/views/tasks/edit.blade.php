@extends('layouts.layout')

@section('content')
    <h1 style="width: 500px">Edit Task</h1>
    <form action="{{ route('task.update', $task->id) }}" method="post" id="taskForm">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="titleId" name="title" value="{{ $task->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="descriptionId" name="description" value="{{ $task->description }}">
        </div>
        <div class="mb-3">
            <label for="isCompletedId" class="form-check-label">Is Completed</label>
            <input type="hidden" name="isCompleted" value="0"> <!-- Скрытое поле для значения 0 -->
            <input type="checkbox" class="form-check-input" id="isCompletedId" name="isCompleted" {{ $task->isCompleted ? 'checked' : 'unchecked' }}>

        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <script>
        // Найти чекбокс и форму
        const checkbox = document.getElementById('isCompletedId');
        const form = document.getElementById('taskForm');

        // Добавить событие при изменении чекбокса
        checkbox.addEventListener('change', function() {
            // Отправить форму при изменении состояния чекбокса
            form.submit();

        });
    </script>
@endsection
