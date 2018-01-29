<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('includes/head')
	</head>
	<body class="fixed-sn white-skin">
		@include('./includes/sidenav')
		<main>
			<div class="container mt-3">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2">
					<div class="row mt-2">
						<div class="col-12 col-md-offset-md-4">
							<h3>Add Theatre Details</h3>
						</div>
					</div>
					<form method="post" action="/addTheater">
						{{csrf_field()}}
						<div class="row mt2">
							<div class="col-12">
								<div class="md-form">
									<input type="text" id="form1" name="theatre_name" class="form-control">
									<label for="form1" class="">Enter Theatre Name</label>
								</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-12">
								<div class="md-form">
									<textarea id="textarea-char-counter" name="theatre_description" class="md-textarea" length="120"></textarea>
									<label for="textarea-char-counter">Enter Theatre Description</label>
								</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-12">
								<div class="md-form">
									<input placeholder="Selected date" type="text" id="date-picker-example" name="date" class="form-control datepicker">
									<label for="date-picker-example">Select Date</label>
								</div>
							</div>
						</div>
						<button type="Submit" class="btn btn-outline-info btn-rounded waves-effect"><i class="" aria-hidden="true"></i>Submit</button>
					</form>
				</div>
			</div>
		</div>
		</main>
		@include('includes/scripts')
		<script type="text/javascript">
			// Data Picker Initialization
			$('.datepicker').pickadate();
		</script>
	</body>
</html>