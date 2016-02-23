
<div id="profile" class="tabbed {{ (!is_null($current) && $current == 'profile') ? 'active' : '' }}">{!! Form::model($user, ['url' => url('admin/users', $user->slug), 'class' => 'form settings-form', 'method' => 'PATCH','files' => true]) !!}
  <div class="group half">
    {!! Form::label('cover', 'Foto de portada', ['class' => 'label']) !!}
    {!! Form::file('cover', ['class' => 'file img']) !!}
    <div style="background: url({{ (!is_null($user->cover())) ? url($user->cover()->url) : asset('img/1f47d.svg') }}) no-repeat center center; background-size: cover;" class="preview"></div>
@if(!is_null($user->cover()))
{!! Form::hidden('cover_id', $user->cover()->id) !!}
@endif

  </div>
  <div class="group half">
    {!! Form::label('photo', 'Foto de perfil', ['class' => 'label']) !!}
    {!! Form::file('photo', ['class' => 'file img']) !!}
    <div style="background: url({{ (!is_null($user->photo())) ? url($user->photo()->url) : asset('img/1f47d.svg') }}) no-repeat center center; background-size: cover;" class="preview"></div>
@if(!is_null($user->photo()))
{!! Form::hidden('photo_id', $user->photo()->id) !!}
@endif

  </div>
  <div class="group">
    {!! Form::label('name', 'Nombre', ['class' => 'label']) !!}
    {!! Form::text('name', null, ['class' => 'input']) !!}
  </div>
  <div class="group">
    {!! Form::label('occupation', 'Ocupación', ['class' => 'label']) !!}
    {!! Form::text('occupation', null, ['class' => 'input']) !!}
  </div>
  <div class="group">
    {!! Form::label('bio', 'Biografía', ['class' => 'label']) !!}
    {!! Form::textarea('bio', null, ['class' => 'input autosize', 'size' => '50x3']) !!}
  </div>
  <div class="group">
    {!! Form::label('email', 'Correo electrónico', ['class' => 'label']) !!}
    {!! Form::text('email', null, ['class' => 'input']) !!}
  </div>
  <div class="group">{!! Form::submit('Guardar', ['class' => 'btn blue submit-right']) !!}</div>{!! Form::close() !!}
</div>