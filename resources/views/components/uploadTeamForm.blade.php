<form method="POST" action="{{ route('uploadTeam') }}">
	@csrf
	<div class="form-group">
		<input type="text" class="form-control @error('teamName') is-invalid @enderror" name="teamName" id="teamName" aria-describedby="nameHelp" placeholder="Enter name" value="{{ old('teamName') ?? 'Untitled Team' }}">

		@error('teamName')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>

	<div class="form-group">
		<select class="form-control @error('format') is-invalid @enderror" name="format" id="format">
			@foreach($formats as $format)
			<option value="{{ $format->id }}" {{ old('format') == $format->id  ? 'selected' : '' }}>{{ $format->name }}</option>
			@endforeach
		</select>

		@error('format')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>

	<div class="form-group">
		<input type="text" class="form-control @error('rentalCode') is-invalid @enderror" name="rentalCode" id="rentalCode" aria-describedby="codeHelp" placeholder="Rental code...(optional)" value="{{ old('rentalCode') }}">

		@error('rentalCode')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>

	<div class="form-group">
		<textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" aria-describedby="descriptionHelp" placeholder="Say a bit about the team...(optional)" value="{{ old('description') }}"></textarea>
		@error('description')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>

	<div class="form-group">
		<textarea class="form-control @error('importTeam') is-invalid @enderror" name="importTeam" id="importTeam" rows="10" placeholder="Enter showdown export here..." value="{{ old('importTeam') }}"></textarea>
		@error('importTeam')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>

	@auth
	<div class="form-group row">
		<div class="col-md-12">
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="privateTeam">
				<label class="custom-control-label" for="privateTeam">
					{{ __('Private team?') }}
					<small id="privateTeamsHelp" class="form-text text-muted">Private teams are only visible to you on the <a href="/my-teams">My Teams</a> and via direct link.</small>
				</label>
			</div>
		</div>
	</div>
	@endauth
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Upload</button>
	</div>
</form>