@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Supplier Edit
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('admin.suppliers.update', [$supplier->id]) }}" method="post" enctype="multipart/form-data">

                            {{ method_field('put') }}

                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="title">{{ __('Title') }}:</label>
                                <input id="title" class="form-control" type="text" name="title"
                                       value="{{ old('title', $supplier->title ) }}">
                                @if($errors->has('title'))
                                    <div class="alert-danger">{{ $errors->first('title') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="logo">{{ __('Logo') }}</label>
                                <input id="logo" class="form-control" type="file" name="logo" accept=".jpg, .jpeg, .png">

                                @if($errors->has('logo'))
                                    <div class="alert-danger">{{ $errors->first('logo') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="description">{{ __('Desciption') }}:</label>
                                <textarea id="description" class="form-control"
                                          name="description">{{ old('description', $supplier->description ) }}</textarea>
                                @if($errors->has('description'))
                                    <div class="alert-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="address">{{ __('Address') }}:</label>
                                <input id="address" class="form-control" type="text" name="address"
                                       value="{{ old('address', $supplier->address ) }}">
                                @if($errors->has('address'))
                                    <div class="alert-danger">{{ $errors->first('address') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="phone">{{ __('Phone') }}:</label>
                                <input id="phone" class="form-control" type="text" name="phone"
                                       value="{{ old('phone', $supplier->phone ) }}">
                                @if($errors->has('phone'))
                                    <div class="alert-danger">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}:</label>
                                <input id="email" class="form-control" type="text" name="email"
                                       value="{{ old('email', $supplier->email ) }}">
                                @if($errors->has('email'))
                                    <div class="alert-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="active">{{ __('Active') }}:</label>

                                <select id="active" name="active" class="form-control">

                                        <option value="yes" {{ (old('active', $supplier->active) == 'yes' ? 'selected' : '') }}>Yes</option>
                                        <option value="no" {{ (old('active', $supplier->active) == 'no' ? 'selected' : '') }}>No</option>

                                </select>

                                @if($errors->has('active'))
                                    <div class="alert-danger">{{ $errors->first('active') }}</div>
                                @endif
                            </div>



                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="{{ __('Update') }}">
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
