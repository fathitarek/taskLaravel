@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Post</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['id' => 'myForm']) !!}
                    <div class="form-group col-sm-6">
                        {!! Form::label('title', 'Title:') !!}
                        {!! Form::text('title', null, ['class' => 'form-control' ]) !!}
                    </div>

                    <!-- content Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('content', 'Content:') !!}
                        {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    </div>
                    {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <div class="result" id="result"></div>

    </div>
    <script>
    $(document).ready(function() {
        $('#myForm').on('submit', function(event) {
            event.preventDefault(); 

            $.ajax({
                url: '{{ URL('/api/posts') }}',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#result').html(
                        '<p class="success">Form submitted successfully!</p>');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#result').html('<p class="error">Error: ' + textStatus + '</p>');
                }
            });
        });
    });
</script>
@endsection


