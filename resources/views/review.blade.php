<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('includes/head')
	</head>
	<body>
		<div class="container mt-3">
			
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2">
					<div class="row mt-2">
						<div class="col-12 col-md-4 offset-md-4">
							<h3>Movie Review</h3>
						</div>
					</div>
					<form>
						<div class="row mt2">
							<div class="col-12">
								<select class="mdb-select">
									<option value="" disabled selected>Choose your option</option>
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
								</select>
								<label>Example label</label>
							</div>
						</div>
						<div class="row mt-2">
						</div>
						<div class="row mt-2">
							<div class="col-12">
								<div class="md-form">
									<textarea id="textarea-char-counter" class="md-textarea" length="120"></textarea>
									<label for="textarea-char-counter">Type your text</label>
								</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-12">
								<label for="textarea-char-counter">Review</label>
							</div>
						</div>
						<div class="row ">
							<div class="col-12">
								<div class="md-form range-field">
									<input type="range" min="0" max="5" />
								</div>
							</div>
						</div>
						<button type="button" class="btn btn-outline-info btn-rounded waves-effect"><i class="" aria-hidden="true"></i>Submit</button>
					</form>
				</div>
				@include('includes/scripts')
				<script type="text/javascript">
					// Material Select Initialization
				$(document).ready(function() {
				$('.mdb-select').material_select();
				});
				</script>
			</body>
		</html>