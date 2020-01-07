@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">Sectors Form</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    @foreach ($errors->all() as $error) 
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach

                    <form action="submitform" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Benjamin Button" name="name" value="{{ $data['name'] }}">
                        </div>
                        <div class="form-group">
                            <label for="sectors[]">Sectors</label>
                            <select name="sectors[]" class="form-control js-example-basic-multiple" multiple="multiple">
                                @foreach ($data['sectors'] as $sector)
                                    <option 
                                        @if (in_array($sector->sector_id, $data['selectedSectors']))
                                            selected="selected"
                                        @endif
                                        value="{{ $sector->sector_id }}">{{ $sector->sector_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group custom-control custom-checkbox mb-4">
                            <input name="agreementToTerms" type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Do you agree to the terms?</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/form.js') }}"></script>
@endsection
