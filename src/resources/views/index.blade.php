@extends('app')

@section('content')
<div class="main-content">
    <div class="form__group">
        <div class="form__todo">
            <form action="" method="post">
                @csrf
                <input type="text" name="todo" id="todo" placeholder="やることを入力">
                <div class="form__button"><button class="form__button-create">作成</button></div>
            </form>
        </div>
    </div>
</div>

<div class="list__group">
    <div class="list__title">
        <p>Todo</p>
    </div>

    <ul class="list__created">
        <li>
            <span>サンプルタスク</span>
            <div class="list__button-group">
                <button class="list__update-btn">更新</button>
                <button class="list__delete-btn">削除</button>
            </div>
        </li>
    </ul>
</div>

@endsection