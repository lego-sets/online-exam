@extends("legocms::admin.layouts.form")

@section('form__content')
    @formField('text',[
        'name' => 'code',
        'label' => 'Subject code'
    ])
@endsection