{!! Form::open(['route' => [$route, $action]
    , 'method' => 'post', 'class' => '']) !!}
<button class="btn btn-primary btn-flat btn-xs" type="submit">
    <i class="fa fa-recycle visible-xs-inline-block"></i>
    <i class="fs-normal hidden-xs">executar</i>
</button>
{!! Form::close() !!}