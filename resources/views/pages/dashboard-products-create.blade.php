@extends('layouts.dashboard')

@section('title')
	Store Dashboard Create Product
@endsection

@section('content')
	<!-- Section Content -->
	<div
		class="section-content section-dashboard-home"
		data-aos="fade-up"
	>
		<div class="container-fluid">
			<div class="dashboard-heading">
				<h2 class="dashboard-title">Add New Products</h2>
				<p class="dashboard-subtitle">
					Create your own product
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
												<label for="name">Product Name</label>
												<input
													type="text"
													class="form-control"
													id="name"
													aria-describedby="name"
													name="storeName"
													value="Toko thoriq"
												/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="price">Price</label>
												<input
													type="number"
													class="form-control"
													id="price"
													aria-describedby="price"
													name="storePrice"
													value="170"
												/>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Kategori</label>
												<select name="category" class="form-control">
													<option value="" disabled
														>Select Category</option
													>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="price">Description</label>
												<textarea name="editor"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="thumbnaila">Thumbnails</label>
												<input
													type="file"
													class="form-control pt-1"
													id="thumbnails"
													aria-describedby="thumbnails"
													name="thumbnails"
												/>
												<small class="text-muted">
													Kamu dapat memilih lebih dari satu file
												</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row mt-2 text-right">
								<div class="col-12">
									<button type="submit" class="btn btn-success px-5">
										Save Now
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('addon-script')
	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
	<script>
		CKEDITOR.replace("editor");
	</script>
@endpush