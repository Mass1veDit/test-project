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


                    <form role="form" enctype="multipart/form-data" method="post" action="{{ route('roles.update',['role' => $item->id ]) }}">
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
                                <label class="col-form-label col-lg-2">{{__('Title')}}
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" name="title" required class="form-control"
                                       value="{{ $item->title ?? "" }}"
                                       placeholder="{{__('Title')}}">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label col-lg-2">{{__('Alias')}}
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="alias" class="form-control"
                                       value="{{ $item->alias ?? "" }}"
                                       placeholder="{{__('Alias')}}">
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
