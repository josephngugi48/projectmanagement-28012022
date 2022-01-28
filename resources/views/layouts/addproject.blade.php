@extends('layouts.app')

@section('content')
@include('layouts.include.leftmenu')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="be-content">
				<div class="main-content container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div class="card card-table card-border-color card-border-color-primary">
								<div class="card-header">
									<div class="title text-primary text-bold">Add Project</div>
								</div>
								<div class="card-body">
									<form method="POST" action="submituser">
			                        @csrf
			                        @if ($message = Session::get('success'))
			                        <div class="row px-4" >
			                        	<div class="alert alert-success alert-block p-2 mb-2 col-sm-12">
				                            <button type="button" class="close" data-dismiss="alert">×</button>
				                            <strong>{{ $message }}</strong>
				                        </div>
			                        </div>
			                        @endif
			                        <div class="row px-4" >
			                        	<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('Project Title') }}</label>

										        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

										        @error('name')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('Project Code') }}</label>

										        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

										        @error('name')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('PAAS CODE') }}</label>

										        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

										        @error('name')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
									</div>  

									<div class="row px-4" >
			                        	<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('PAG Value') }}</label>

										        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

										        @error('name')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('Donor') }}</label>

										        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

										        @error('name')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('Theme') }}</label>

										        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

										        @error('name')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
									</div>     

									<div class="row px-4" >
			                        	<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('Project Expenditure') }}</label>

										        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

										        @error('name')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('Project Contribution') }}</label>

										        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

										        @error('name')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('Project Contribution - Project Expenditure') }}</label>

										        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

										        @error('name')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
									</div>    

									<div class="row px-4" >
			                        	<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('Project Country') }}</label>

										        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

										        @error('name')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('Project Status') }}</label>

										        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

										        @error('name')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('Project Lead Unit') }}</label>

										        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

										        @error('name')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
									</div>     

			                        <div class="row px-4" >
			                        	<div class="col-sm-4">
			                        		<div class="form-group">
										        <button type="submit" class="btn btn-primary col-sm-12">
										            {{ __('Add') }}
										        </button>
											</div>
			                        	</div>
			                        </div>

			                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
