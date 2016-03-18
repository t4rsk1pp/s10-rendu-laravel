@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('errors.message')
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter un article</div>
                    <div class="panel-body">
                        {!! Form::open(array(
                            'route' => 'post.store',
                            'method' => 'POST'
                            ))
                        !!}
                            <div class="form-group">
                                {!! Form::label('title', 'Titre') !!}
                                {!! Form::text('title', '', 
                                    ['class' => 'form-control',
                                    'placeholder' => 'Mon titre'
                                    ]) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('content', 'Contenu') !!}
                                {!! Form::textarea('content', '', 
                                    ['class' => 'form-control',
                                    'placeholder' => 'Contenu'
                                    ]) 
                                !!}
                            </div>
                    </div>
                    <div class="panel-footer" style="text-align: center;">    
                        {!! Form::submit('Publier',
                            ['class' => 'btn btn-primary'])
                        !!}

                        
                        <a class="btn btn-default" href="{{ route('post.index') }}">
                            Retour
                        </a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection