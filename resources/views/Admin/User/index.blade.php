<!-- Page header -->
<section class="content-header">
    <h1>{{$title ?? ''}}</h1>

</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{--<div class="card-header">
                        <h3 class="card-title">{{$title ?? ''}}</h3>
                    </div>--}}
                    <div class="card-body">
                        @if($users)
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dt-buttons btn-group flex-wrap">
                                        <div class="btn-group">
                                            {{--<a href="{{route('users.create')}}" class="btn btn-primary btn-sm">Добавить пользователя</a>--}}
                                            <a href="{{route('users.create')}}" class="btn btn-primary btn-sm">Добавить пользователя</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter">
                                        <form method="get" action="{{route('search')}}">
                                            <label>
                                                Поиск:
                                                <input id="s" name="s" type="search" class="form-control form-control-sm" placeholder="Например: 'ivanov'" aria-controls="example1">
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                        <thead>
                                            <th>{{ __('ID') }}</th>
                                            <th>{{ __('Фамилия') }}</th>
                                            <th>{{ __('Имя') }}</th>
                                            <th>{{ __('Отчество') }}</th>
                                            <th>{{ __('Почта') }}</th>
                                            <th>{{ __('Телефон') }}</th>
                                            <th>{{ __('Пол') }}</th>
                                            <th>{{ __('Статус') }}</th>
                                            <th>{{ __('Дата добавления') }}</th>
                                            <th>{{ __('Дата обновления') }}</th>
                                            <th>{{ __('Роль') }}</th>
                                            <th>{{ __('Действия') }}</th>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->lastname}}</td>
                                                    <td>{{$user->firstname}}</td>
                                                    <td>{{$user->patronymic}}</td>
                                                    <td>{{$user->email}}</td>

                                                {{--@foreach($roles as $role)

                                                       @if($role->id == $user->id)
                                                            <td>{{$role->email}}</td>
                                                        @endif


                                                @endforeach--}}
                                                    <td>{{$user->phone}}</td>
                                                    <td>@if($user->sex == 0)М @else Ж @endif

                                                        {{-- <a href="{{route('roles.edit',['role'=>$role->id])}}"
                                                            class="btn btn-primary btn-labeled">{{ __('Edit') }}
                                                         </a>--}}


                                                        {{--<form method="post"  action="{{route('roles.delete',['role'=>$role->id])}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button  type="submit" class="btn btn-danger">{{ __('Delete') }}
                                                            </button>
                                                        </form>--}}
                                                    </td>
                                                    <td>@if($user->status == 1)Онлайн @else Оффлайн @endif</td>
                                                    <td>{{$user->created_at}}</td>
                                                    <td>{{$user->updated_at}}</td>

                                                    <td>
                                                        @forelse($user->roles as $role)
                                                            {{ $role->title }}
                                                        @empty
                                                            Пользователь
                                                        @endforelse
                                                    </td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="{{route('users.show',['user'=>$user->id])}}" class="btn btn-default"><i class="fas fa-eye"></i></a>
                                                            <a href="{{route('users.edit',['user'=>$user->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                        Показано с {{$users->firstItem()}} по {{$users->lastItem()}} из {{$users->total()}} записей
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                        <ul class="pagination">
                                            {{$users->appends(['s'=>request()->s])->onEachSide(2)->links("pagination::bootstrap-4")}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>
