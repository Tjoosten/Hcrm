@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
            <div class="page-header">
                <h2> Create a new customer </h2>
            </div>

            <form action="{!! route('customer.insert') !!}" method="POST" class="form-horizontal">
                {{-- CSRF field --}}
                {{ csrf_field() }}

                {{-- Name form-group --}}
                <div class="form-group formSep {{ $errors->has('name') ? 'has-error': '' }}">
                    <label class="col-sm-3 control-label" for="name">
                        Lastname: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ old('name') }}" type="text" id="name" name="name" placeholder="Customer lastname" class="form-control"/>

                        @if($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- Firstname --}}
                <div class="form-group formSep {{ $errors->has('fname') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="fname">
                        Firstname <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ old('fname') }}" type="text" id="fname" name="fname" placeholder="Customer firstname" class="form-control" />

                        @if($errors->has('fname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- Street form-group --}}
                <div class="form-group formSep {{ $errors->has('street') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="street">
                        Street: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ old('street') }}" type="text" id="street" name="street" placeholder="Street" class="form-control" />

                        @if($errors->has('street'))
                            <span class="help-block">
                                <strong>{{ $errors->first('street') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- Zipcode form-group --}}
                <div class="form-group formSep {{ $errors->has('zipcode') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="zipcode">
                        Zipcode: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ old('zipcode') }}" type="text" id="zipcode" name="zipcode" placeholder="Zipcode" class="form-control" />

                        @if($errors->has('zipcode'))
                            <span class="help-block">
                                <strong>{{ $errors->first('zipcode') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- city form-group --}}
                <div class="form-group formSep {{ $errors->has('city') ? 'has-error' : '' }}">
                    <label for="city" class="col-sm-3 control-label">
                        City: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ old('city') }}" type="text" id="city" name="city" placeholder="City" class="form-control" />

                        @if($errors->has('city'))
                            <span class="help-block">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- State form-group --}}
                <div class="form-group formSep {{ $errors->has('state') ? 'has-error' : '' }}">
                    <label for="state" class="col-sm-3 control-label">
                        State: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ old('state') }}" type="text" placeholder="State/province" class="form-control" name="state">

                        @if($errors->has('state'))
                            <span class="help-block">
                                <strong> {{ $errors->first('state') }} </strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- country form-group --}}
                <div class="form-group formSep {{ $errors->has('country') ? 'has-error' : '' }}">
                    <label for="country" class="col-sm-3 control-label">
                        Country <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <select name="country" id="country" class="form-control">
                            <option value="">Select the country</option>

                            @foreach($countries as $country)
                                <option value="{{ $country->country }}">
                                    {{ $country->country }}
                                </option>
                            @endforeach
                        </select>

                        @if($errors->has('country'))
                            <span class="help-block">
                                <strong>{{ $errors->first('country') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- email form-group --}}
                <div class="form-group formSep  {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label class="control-label col-sm-3" for="email">
                        Email: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ old('email') }}" type="text" id="email" class="form-control" name="email" placeholder="Customer email">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- phone form-group --}}
                <div class="form-group formSep {{ $errors->has('phone') ? 'has-error' : '' }}">
                    <label for="phone" class="control-label col-sm-3">
                        Phone nr: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ old('phone') }}" type="text" id="phone" class="form-control" name="phone" placeholder="Customer phone nr." />

                        @if($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- mobile form-group --}}
                <div class="form-group formSep">
                    <label for="mobile" class="control-label col-sm-3">
                        Mobile nr:
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ old('mobile') }}" type="text" id="mobile" class="form-control" name="mobile" placeholder="Customer mobile nr." />
                    </div>
                </div>

                {{-- Company form-group --}}
                <div class="form-group formSep">
                    <label for="company" class="control-label col-sm-3">
                        Company: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ old('company') }}" type="text" id="company" class="form-control" name="company" placeholder="Customer Company" />
                    </div>
                </div>

                {{-- vat form-group --}}
                <div class="form-group formSep {{ $errors->has('vat') ? 'has-error' : '' }}">
                    <label for="vat" class="control-label col-sm-3">
                        VAT number: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ old('vat') }}" type="text" id="vat" name="vat" class="form-control" placeholder="Customer VAT number" />

                        @if($errors->has('vat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('vat') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{--  Submit button--}}
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" class="btn btn-primary" value="Send">
                        <input type="reset" class="btn btn-danger" value="Reset form">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection