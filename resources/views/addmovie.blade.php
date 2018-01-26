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
							<h3>Add Movie Details</h3>
						</div>
					</div>
					<form>
						<div class="row mt2">
							<div class="col-12">
								<div class="md-form">
									<input type="text" id="form1" class="form-control">
									<label for="form1" class="">Enter Movie Name</label>
								</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-12">
								<div class="file-field">
									<div class="btn btn-primary btn-sm">
										<span>Choose Image</span>
										<input type="file" >
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text" placeholder="Upload Image">
									</div>
								</div>
							</div>
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
								<div class="md-form">
									<input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker">
									<label for="date-picker-example">Select date</label>
								</div>
							</div>
						</div>
						<button type="button" class="btn btn-outline-info btn-rounded waves-effect"><i class="" aria-hidden="true"></i>Submit</button>
					</form>
				</div>
					@include('includes/scripts')
					<script type="text/javascript">
						// Data Picker Initialization
						$('.datepicker').pickadate();
					</script>
				</body>
			</html>