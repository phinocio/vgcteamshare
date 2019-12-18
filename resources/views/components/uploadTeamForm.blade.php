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
		<textarea class="form-control @error('importTeam') is-invalid @enderror" name="importTeam" id="importTeam" rows="10" placeholder="Enter showdown export here... (6 pokemon required)" value="{{ old('importTeam') }}"></textarea>
		@error('importTeam')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>

	@auth
	<div class="form-group">
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input @error('private') is-invalid @enderror" name="private" id="private">
			<label class="custom-control-label" for="private">
				{{ __('Private team?') }}
				<small id="privateHelp" class="form-text text-muted">Private teams are only visible to you on the <a href="/my-teams">My Teams</a> and via direct link.</small>
			</label>
		</div>
		@error('private')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
	@endauth
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Upload</button>
	</div>
</form>