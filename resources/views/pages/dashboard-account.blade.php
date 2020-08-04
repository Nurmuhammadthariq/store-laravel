@extends('layouts.dashboard')

@section('title')
	Store Account
@endsection

@section('content')
	<!-- Section Content -->
	<div
		class="section-content section-dashboard-home"
		data-aos="fade-up"
	>
		<div class="container-fluid">
			<div class="dashboard-heading">
				<h2 class="dashboard-title">My Account</h2>
				<p class="dashboard-subtitle">
					Update your current profile
				</p>
			</div>

			<div class="dashboard-content">
				<div class="row">
					<div class="col-12">
						<form action="">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Your Name</label>
												<input
													type="text"
													class="form-control"
													id="name"
													aria-describedby="nameHelp"
													name="name"
													value="Papel La Casa"
												/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="email">Your Email</label>
												<input
													type="email"
													class="form-control"
													id="email"
													aria-describedby="emailHelp"
													name="email"
													value="thoriq.noer@gmail.com"
												/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="addressOne">Address 1</label>
												<input
													type="text"
													class="form-control"
													id="addressOne"
													aria-describedby="emailHelp"
													name="addressOne"
													value="Pamulang 2, Jalan benda barat XII"
												/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="addressTwo">Address 2</label>
												<input
													type="text"
													class="form-control"
													id="addressTwo"
													aria-describedby="emailHelp"
													name="addressTwo"
													value="RT/RW 004/09"
												/>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="province">Province</label>
												<select
													name="province"
													id="province"
													class="form-control"
												>
													<option value="Banteb">Banten</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="city">City</label>
												<select
													name="city"
													id="city"
													class="form-control"
												>
													<option value="Tangerang Selatan"
														>Tangerang Selatan</option
													>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="postalCode">Postal Code</label>
												<input
													type="text"
													class="form-control"
													id="postalCode"
													name="postalCode"
													value="15406"
												/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="country">Country</label>
												<input
													type="text"
													class="form-control"
													id="country"
													name="country"
													value="Indonesia"
												/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="mobile">Mobile</label>
												<input
													type="text"
													class="form-control"
													id="mobile"
													name="Mobile"
													value="081123456789"
												/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col text-right">
											<button
												type="submit"
												class="btn btn-success px-5"
											>
												Save Now
											</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection