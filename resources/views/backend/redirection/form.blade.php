<div class="card-block">

    {{ Form::bsText('source', [
        'required' => true,
        'title' => trans('validation.attributes.source_path'),
        'label_col_class' => 'col-lg-3',
        'field_wrapper_class' => 'col-lg-9',
    ]) }}

    {{ Form::bsCheckbox('active', [
        'label' => trans('validation.attributes.active'),
        'field_wrapper_class' => 'offset-lg-3 col-lg-9',
        'checked' => isset($redirection) ? $redirection->active : true
    ]) }}

    {{ Form::bsText('target', [
        'required' => true,
        'title' => trans('validation.attributes.target_path'),
        'label_col_class' => 'col-lg-3',
        'field_wrapper_class' => 'col-lg-9',
    ]) }}

    {{ Form::bsChoices('type', [
        'required' => true,
        'title' => trans('validation.attributes.redirect_type'),
        'label_col_class' => 'col-lg-3',
        'field_wrapper_class' => 'col-lg-9',
        'choices' => config('redirections'),
    ]) }}
</div>