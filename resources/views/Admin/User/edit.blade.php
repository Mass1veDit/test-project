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
        </div>


        <form role="form" enctype="multipart/form-data" method="post" action="{{ route('users.update',['user' => $item->id ]) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @csrf
                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Фамилия')}}
                        <span class="text-danger">*</span>
                    </label>

                    <input type="text" name="firstname" required class="form-control"
                           value="{{ $item->firstname ?? "" }}"
                           placeholder="{{__('Фамилия')}}">
                </div>
                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Имя')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="lastname" class="form-control"
                           value="{{ $item->lastname ?? "" }}"
                           placeholder="{{__('Имя')}}">
                </div>

                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Отчество')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="patronymic" class="form-control"
                           value="{{ $item->patronymic ?? "" }}"
                           placeholder="{{__('Отчество')}}">
                </div>

                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Почта')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="email" class="form-control"
                           value="{{ $item->email  ?? "" }}"
                           placeholder="{{__('Почта ')}}">
                </div>

                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Телефон')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="phone" class="form-control"
                           value="{{ $item->phone  ?? "" }}"
                           placeholder="{{__('Телефон ')}}">
                </div>

                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Пол ')}}
                        <span class="text-danger">*</span>
                    </label>

                    <select class="form-control" type="text" name="sex" value="{{$item->sex  ?? "" }}"
                            placeholder="{{__('sex')}}">
                        @if($item->sex == 0)
                            {
                            <option value="{{$item->sex  ?? "" }}">Мужской</option>
                            <option value="1">Женский</option>
                            }
                        @elseif($item->sex == 1)
                            {
                            <option value="{{$item->sex  ?? "" }}">Женский</option>
                            <option value="0">Мужской</option>
                            }
                            @endif
                            </option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Роль ')}}
                        <span class="text-danger">*</span>
                    </label>
                    <td ><br>@forelse($item->roles as $role){{ $role->alias }}@empty Пользователь @endforelse</td>
                </div>

                <i>Поля <span class="text-danger"><strong>*</strong></span> обязательны к заполнению</i>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-block btn-primary">{{__('Изменить')}}</button>
            </div>
        </form>
    </div>
</section>
<!-- /content area -->
