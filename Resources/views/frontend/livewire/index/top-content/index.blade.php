<div class="top-content mb-2">
	
	@include('isite::frontend.livewire.index.top-content.custom-titles')

	@if($responsive['top-content']['desktop'])

		<div class="options-product-list d-none d-lg-block d-xl-block">

			<div class="row align-items-center">

				{{-- Total Products --}}
				<div class="col-lg-4">
					@include('isite::frontend.livewire.index.top-content.total-items')
				</div>

				{{-- Filter - Order By --}}
				<div class="col-lg-5">
					@include('isite::frontend.livewire.index.top-content.filter-orderby')
				</div>

				{{-- Change Layout --}}
				<div class="col-lg-3">
					@include('isite::frontend.livewire.index.top-content.change-layout') 
				</div>
				
			</div>

		</div>

	@endif

	

	@if($responsive['top-content']['mobil'])
		@include('isite::frontend.livewire.index.top-content.mobile.index')
	@endif
	

</div>