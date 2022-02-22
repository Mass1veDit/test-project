<!-- Page header -->
<section class="content-header">
    <h1>{{$title}}</h1>
</section>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <!-- Hover rows -->
    <div class="card">
        <div class="table-responsive">
            @if($roles)
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>{{ __('ID') }}</th>
                        <th>{{ __('Заголовок ("Title")') }}</th>
                        <th>{{ __('Псевдоним ("Alias")')}}</th>
                        <th>{{ __('Редактирование') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->title}}</td>
                            <td>{{$role->alias}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{route('roles.edit',['role'=>$role->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <form method="post"  action="{{route('roles.delete',['role'=>$role->id])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button  type="submit" class="btn btn-outline-primary">{{ __('Удалить') }}</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @endforeach

                    <div style="display:none">
                        <form method="post" id="contact-applications-delete" action="">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>

                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <!-- /hover rows -->
    <a href="{{route('roles.create')}}" class="btn btn-block btn-primary">{{ __('Создать роль') }}</a>
</div>
<!-- /content area -->
