@extends('app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Balsavimo forma</div>

            <div class="card-body">
                {!! Form::open(['action' => 'VoteController@store']) !!}
                    <div class="form-group">
                        {{Form::label('vote_type', 'Balsavimas ', ['class' => 'strong'])}}
                        <span class="text-danger">*</span>
                        <br />
                        {{Form::label('vote_type', 'Kartotinis ', ['class' => ''])}}
                        {{Form::radio('vote_type', 'kartotinis', true)}}
                    </div>
                    <div class="form-group">
                        {{Form::label('address', 'Daugiabučio namo adresas', ['class' => 'strong'])}}
                        <span class="text-danger">*</span>
                        {{Form::select('address', $addresses, '', 
                        [
                            'class' => 'form-control selectpicker', 
                            'title' => 'Pasirinkite adresą', 
                            'data-live-search' => 'true' 
                        ])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('house_nr', 'Buto ir/ar patalpos numeris', ['class' => 'strong'])}}
                        <span class="text-danger">*</span>
                        {{Form::text('house_nr', '', ['class' => 'form-control', 'placeholder' => 'pvz. 24', 'autocomplete' => 'off'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('unique_code', 'Buto arba patalpos unikalus numeris Nekilnojamojo turto registre', ['class' => 'strong'])}}
                        {{Form::text('unique_code', '', ['class' => 'form-control', 'placeholder' => 'XXXX-XXXX-XXXX', 'autocomplete' => 'off'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('owner_name', 'Buto ir kitos patalpos savininko vardas, pavardė, juridinio asmens pavadinimas', ['class' => 'strong'])}}
                        <span class="text-danger">*</span>
                        {{Form::text('owner_name', '', ['class' => 'form-control', 'placeholder' => 'pvz. Vardenis Pavardenis', 'autocomplete' => 'off'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('vote_type', 'Svarstomas klausimas', ['class' => 'strong'])}}
                        <span class="text-danger">*</span>
                        <br />
                        {{Form::label('question', 'Dėl daugiabučio namo administratoriaus pasirinkimo ', ['class' => ''])}}
                        {{Form::radio('question', 'Dėl daugiabučio namo administratoriaus pasirinkimo', true)}}
                    </div>
                    {{Form::submit('Generuoti biuletenį', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>
@endsection