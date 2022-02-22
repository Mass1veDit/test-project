<!-- Page header -->
<section class="content-header">
    <h1>{{$title}}</h1>
</section>
<!-- /page header -->

<!-- Content area -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{__('Общая информация')}}</h3>
            <div class="card-tools">
                <ul class="pagination pagination-sm float-right">
                    <li class="page-item">

                    </li>
                </ul>
            </div>
        </div>
        <table class="table table-bordered table-striped">
            <tbody>
            <tr>
                <th>{{ __('ID') }}</th>
                <td>{{ $item->id ?? "" }}</td>
            </tr>
            <tr>
                <th>{{ __('Фамилия') }}</th>
                <td>{{ $item->lastname ?? "" }}</td>
            </tr>
            <tr>
                <th>{{ __('Имя') }}</th>
                <td>{{ $item->firstname ?? "" }}</td>
            </tr>
            <tr>
                <th>{{ __('Отчество') }}</th>
                <td>{{ $item->patronymic ?? "" }}</td>
            </tr>
            <tr>
                <th>{{ __('Почта') }}</th>
                <td>{{ $item->email ?? "" }}</td>
            </tr>
            <tr>
                <th>{{ __('Телефон') }}</th>
                <td>{{ $item->phone ?? "" }}</td>
            </tr>
            <tr>
                <th>{{ __('Пол') }}</th>
                <td> @if($item->sex == 0){{'Женский'}}@elseif($item->sex == 1){{'Мужской'}}@else{{'Не указан'}}@endif</td>
            </tr>
            <tr>
                <th>{{ __('Роль') }}</th>
                <td>@forelse($item->roles as $role){{ $role->title }}@empty Пользователь @endforelse</td>
            </tr>
            <tr>
                <th>{{ __('Дата регистрации') }}</th>
                <td>{{ $item->created_at ?? "" }}</td>
            </tr>
            <tr>
                <th>{{ __('Дата изменения') }}</th>
                <td>{{ $item->updated_at ?? "" }}</td>
            </tr>

            <tr>
                <th>{{ __('Удалить') }}</th>
                <td>
                    <div class="btn-group">
                        <a href="{{route('users.edit',['user'=>$item->id])}}" class="btn btn-outline-dark">Изменить пользователя</a>
                        <a href="#" class="btn btn-outline-dark">Забанить пользователя</a>
                        <form method="post"  action="{{route('users.delete',['user'=>$item->id])}}">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="btn btn-outline-dark" data-toggle="modal" data-target="#modal-primary">{{ __('Удалить') }}</button>
                        </form>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>

        <div style="display:none">
            <form method="post" action="">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</section>
<!-- /content area -->


<div class="modal fade" id="modal-primary" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">
            <div class="modal-header">
                <h4 class="modal-title">Primary Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body…</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-light">Save changes</button>
            </div>
        </div>

    </div>
</div>


