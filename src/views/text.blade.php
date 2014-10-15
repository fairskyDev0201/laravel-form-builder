@if ($showLabel && $showField)
<div {!! $options['wrapperAttrs'] !!} >
@endif

    @if ($showLabel)
    {!! Form::label($name, $options['label'], $options['label_attr']) !!}
    @endif

    @if ($showField)
    {!! Form::input($type, $name, $options['default_value'], $options['attr']) !!}
    @endif

    @if ($showError && isset($errors))
        {!! $errors->first($name, '<div '.$options['errorAttrs'].'>:message</div>') !!}
    @endif

@if ($showLabel && $showField)
</div>
@endif
