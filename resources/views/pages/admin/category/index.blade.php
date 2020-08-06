@extends('layouts.admin')

@section('title')
	Admin Category
@endsection

@section('content')
	<!-- Section Content -->
	<div
		class="section-content section-dashboard-home"
		data-aos="fade-up"
	>
		<div class="container-fluid">
			<div class="dashboard-heading">
				<h2 class="dashboard-title">Category</h2>
				<p class="dashboard-subtitle">
					List Of Categories
				</p>
			</div>

			<div class="dashboard-content">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<a href="{{ route('category.create') }}" class="btn btn-primary mb-3">
									Add Kategory Baru
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection