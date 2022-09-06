@extends('layouts.app')

@section('title-block')Страница контактов@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Форма обратной связи</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">Error!</div>
                @endif
                <form action="{{ route('show') }}" method="post">
                    @csrf
                    <div class="form-group w-50">
                        <label for="name">{{ __('validation.attributes.name') }}</label>
                        <input value="{{ old('name') }}" name="name" type="text" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <label for="email">{{ __('validation.attributes.email') }}</label>
                        <input value="{{ old('email') }}" name="email" type="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group w-50">
                        <label for="phone">{{ __('validation.attributes.phone') }}</label>
                        <input value="{{ old('phone') }}" name="phone" type="tel" class="form-control @error('phone') is-invalid @enderror">
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group w-50">
                        <label for="text">{{ __('validation.attributes.text') }}</label>
                        <textarea name="text" rows="3"
                                  class="form-control @error('text') is-invalid @enderror">{{ old('text') }}</textarea>
                        @error('text')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
