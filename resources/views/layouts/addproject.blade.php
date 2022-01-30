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
									<form method="POST" action="submitproject">
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
											    <label for="pname" class="col-form-label text-md-right">{{ __('Project Title') }}</label>

										        <input id="pname" type="text" class="form-control @error('pname') is-invalid @enderror" name="pname" value="{{ old('pname') }}" autocomplete="pname" autofocus>

										        @error('pname')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="name" class="col-form-label text-md-right">{{ __('Project Code') }}</label>

										        <input id="pcode" type="text" class="form-control @error('pcode') is-invalid @enderror" name="pcode" value="{{ old('pcode') }}" autocomplete="pcode" autofocus>

										        @error('pcode')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="paascode" class="col-form-label text-md-right">{{ __('PAAS CODE') }}</label>

										        <input id="paascode" type="text" class="form-control @error('paascode') is-invalid @enderror" name="paascode" value="{{ old('paascode') }}" autocomplete="paascode" autofocus>

										        @error('paascode')
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
											    <label for="pagvalue" class="col-form-label text-md-right">{{ __('PAG Value') }}</label>

										        <input id="pagvalue" type="number" min="1" step="any" class="form-control @error('pagvalue') is-invalid @enderror" name="pagvalue" value="{{ old('pagvalue') }}" autocomplete="pagvalue" autofocus>

										        @error('pagvalue')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="donor" class="col-form-label text-md-right">{{ __('Donor') }}</label>

										        <input id="donor" type="text" class="form-control @error('donor') is-invalid @enderror" name="donor" value="{{ old('donor') }}" autocomplete="donor" autofocus>

										        @error('donor')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="theme" class="col-form-label text-md-right">{{ __('Theme') }}</label>

										        <select class="form-control @error('theme') is-invalid @enderror" name="theme">
										        	<option value="0" > -- </option>
													@foreach($themes as $theme)
													<option value="{{ $theme->id }}" @if(old('theme')&&old('theme')== $theme->id) selected='selected' @endif >{{ $theme->themetitle }}</option>
													@endforeach
												</select>

										        @error('theme')
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

										        <input id="projectexp" type="number" min="1" step="any" class="form-control @error('projectexp') is-invalid @enderror" name="projectexp" value="{{ old('projectexp') }}" autocomplete="projectexp" autofocus>

										        @error('projectexp')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" > 
				                        	<div class="form-group">
											    <label for="projectcont" class="col-form-label text-md-right">{{ __('Project Contribution') }}</label>

										        <input id="projectcont" type="number" min="1" step="any" class="form-control @error('projectcont') is-invalid @enderror" name="projectcont" value="{{ old('projectcont') }}" autocomplete="projectcont" autofocus>

										        @error('projectcont')
										            <span class="invalid-feedback" role="alert">
										                <strong>{{ $message }}</strong>
										            </span>
										        @enderror
											</div>
										</div>
										<div class="col-sm-4" >
				                        	<div class="form-group">
											    <label for="projectcontexp" class="col-form-label text-md-right">{{ __('Project Contribution - Project Expenditure') }}</label>

										        <input id="projectcontexp" type="number" min="1" step="any" class="form-control @error('projectcontexp') is-invalid @enderror" name="projectcontexp" value="{{ old('projectcontexp') }}" autocomplete="projectcontexp" autofocus>

										        @error('projectcontexp')
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

										        <select class="form-control @error('countryid') is-invalid @enderror" name="countryid">
										        	<option value="0" > -- </option>
													@foreach($countries as $country)
													<option value="{{ $country->id }}">{{ $country->countryname }}</option>
													@endforeach
												</select>

										        @error('countryid')
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

										        <select class="form-control @error('projectleadid') is-invalid @enderror" name="projectleadid">
										        	<option value="0" > -- </option>
													@foreach($orgunits as $orgunit)
													<option value="{{ $orgunit->id }}">{{ $orgunit->orgunit }}</option>
													@endforeach
												</select>

										        @error('projectleadid')
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
