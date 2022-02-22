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


        <form role="form" enctype="multipart/form-data" method="post" action="{{ route('users.store') }}">
            @csrf
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
                    <input type="text" name="lastname" class="form-control"
                           value="{{ $item->lastname ?? "" }}"
                           placeholder="{{__('Иванов')}}">
                </div>

                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Имя')}}
                        <span class="text-danger">*</span>
                    </label>

                    <input type="text" name="firstname" required class="form-control"
                           value="{{ $item->firstname ?? "" }}"
                           placeholder="{{__('Иван')}}">
                </div>
                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Отчество')}}
                        <span class="text-danger">*</span>
                    </label>

                    <input type="text" name="patronymic" required class="form-control"
                           value="{{ $item->patronymic ?? "" }}"
                           placeholder="{{__('Иванович')}}">
                </div>
                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Электронная почта')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="email" class="form-control"
                           value="{{ $item->email ?? "" }}"
                           placeholder="{{__('ivanov@test.ru')}}">
                </div>
                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Мобильный телефон')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input id="phone" type="text" name="phone" class="form-control"
                           value="{{ $item->phone ?? "" }}"
                           placeholder="{{__('79099999999')}}">
                </div>
                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Пол')}}
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control" type="text" name="sex" value="{{ $item->phone ?? "" }}"
                            placeholder="{{__('sex')}}">
                        <option>Выберите пол</option>
                        <option value="1">Женский</option>
                        <option value="0">Мужской</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Пароль')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="password" name="password" class="form-control"
                           value="{{ $item->password ?? "" }}"
                           placeholder="{{__('*******')}}">
                </div>

                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Подтверждение пароля')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="password" name="password_confirmation" class="form-control"
                           value="{{ $item->password ?? "" }}"
                           placeholder="{{__('*******')}}">
                </div>

                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Выберите аватар')}}
                        <span class="text-danger">*</span>
                    </label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="customFile">Выбрать файл</label>
                        <input type="file" class="custom-file-input" id="customFile">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label col-lg-2">{{__('Роль')}}
                        <span class="text-danger">*</span>
                    </label>
                    <select name="role_id" class="form-control" type="text">
                        @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->title}} </option>
                        @endforeach
                    </select>
                </div>
                <i>Поля <span class="text-danger"><strong>*</strong></span> обязательны к заполнению</i>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-block btn-primary">{{__('Создать')}}</button>
            </div>
        </form>
    </div>
</section>

