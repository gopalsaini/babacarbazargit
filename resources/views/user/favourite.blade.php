@extends('layouts.app')
@push('custom_css')

	<style>
		.action-td p {
			margin-bottom: 5px;
		}
	</style> 
	<style type="text/css">
	
	
/* === v9.0.1 === */
/* === Body === */
@media (min-width: 1200px) {.container { max-width: 1200px; }}
/* === Header === */
.navbar.navbar-site { position: fixed !important; }#wrapper { padding-top: 65px; }.navbar.navbar-site .navbar-identity .navbar-brand {height: 60px;padding-top: 10px;padding-bottom: 10px;}@media (max-width: 767px) {#wrapper { padding-top: 61px; }.navbar-site.navbar .navbar-identity { height: 60px; }.navbar-site.navbar .navbar-identity .btn,.navbar-site.navbar .navbar-identity .navbar-toggler { margin-top: 10px; }}@media (max-width: 479px) {#wrapper { padding-top: 61px; }.navbar-site.navbar .navbar-identity { height: 60px; }}@media (min-width: 768px) and (max-width: 992px) {.navbar.navbar-site .navbar-identity a.logo { height: 60px; }.navbar.navbar-site .navbar-identity a.logo-title { padding-top: 10px; }}@media (min-width: 768px) {.navbar.navbar-site .navbar-identity { margin-top: 0px; }.navbar.navbar-site .navbar-collapse { margin-top: 0px; }}.navbar.navbar-site {border-bottom-width: 1px !important;border-bottom-style: solid !important;}.navbar.navbar-site { border-bottom-color: #E8E8E8 !important; }
/* === Footer === */

/* === Button: Add Listing === */

/* === Other: Grid View Columns === */
.make-grid .item-list { width: 25.00% !important; }@media (max-width: 767px) {.make-grid .item-list { width: 50% !important; }}.make-grid .item-list .cornerRibbons { left: -30.00%; top: 8%; }.make-grid.noSideBar .item-list .cornerRibbons { left: -22.00%; top: 8%; }@media (min-width: 992px) and (max-width: 1119px) {.make-grid .item-list .cornerRibbons { left: -36.00%; top: 8%; }.make-grid.noSideBar .item-list .cornerRibbons { left: -26.00%; top: 8%; }}@media (min-width: 768px) and (max-width: 991px) {.make-grid .item-list .cornerRibbons { left: -35.00%; top: 8%; }.make-grid.noSideBar .item-list .cornerRibbons { left: -25.00%; top: 8%; }}@media (max-width: 767px) {.make-grid .item-list { width: 50%; }}@media (max-width: 767px) {.make-grid .item-list .cornerRibbons, .make-grid.noSideBar .item-list .cornerRibbons { left: -10%; top: 8%; }}@media (max-width: 736px) {.make-grid .item-list .cornerRibbons, .make-grid.noSideBar .item-list .cornerRibbons { left: -12%; top: 8%; }}@media (max-width: 667px) {.make-grid .item-list .cornerRibbons, .make-grid.noSideBar .item-list .cornerRibbons { left: -13%; top: 8%; }}@media (max-width: 568px) {.make-grid .item-list .cornerRibbons, .make-grid.noSideBar .item-list .cornerRibbons { left: -14%; top: 8%; }}@media (max-width: 480px) {.make-grid .item-list .cornerRibbons, .make-grid.noSideBar .item-list .cornerRibbons { left: -22%; top: 8%; }}.posts-wrapper.make-grid .item-list:nth-child(4n+4),.category-list.make-grid .item-list:nth-child(4n+4) {border-right: solid 1px #ddd;}.posts-wrapper.make-grid .item-list:nth-child(3n+3),.category-list.make-grid .item-list:nth-child(3n+3) {border-right: solid 1px #ddd;}.posts-wrapper.make-grid .item-list:nth-child(4n+4),.category-list.make-grid .item-list:nth-child(4n+4) {border-right: none;}@media (max-width: 991px) {.posts-wrapper.make-grid .item-list:nth-child(4n+4),.category-list.make-grid .item-list:nth-child(4n+4) {border-right-style: solid;border-right-width: 1px;border-right-color: #ddd;}}
/* === Homepage: Search Form Area === */
#homepage .wide-intro {background-image: url(https://laraclassified.bedigit.com/storage/app/logo/thumb-2000x1000-header-60fb58a67e38b.jpg?v=1);background-size: cover;}
/* === Homepage: Locations & Country Map === */

	
	/* === CSS Fix === */
	.f-category h6 {
		color: #333;
	}
	.photo-count {
		color: #292b2c;
	}
	.page-info-lite h5 {
		color: #999999;
	}
	h4.item-price {
		color: #292b2c;
	}
	.skin-blue .pricetag {
		color: #fff;
	}
	
</style>
<style>
.action-td p {
	margin-bottom: 5px;
}
.add-img-td img {
    max-width: 55px;
}
</style>
<style>
.laravel-pagination .flex-1, .laravel-pagination p.leading-5{display:none;}
.w-5.h-5{height: 20px;}
@media (min-width: 200px) and (max-width: 767px) {
	.reverce-direction{
		flex-direction: column-reverse;
	}
}
</style>
@endpush
@section('favourite')
active
@endsection
@section('content')

		<div class="h-spacer"></div>
		<div class="main-container">
		  <div class="container">
		    <div class="row reverce-direction">
		      @include('user.sidebar')
		      <!--/.page-sidebar-->
		      <div class="col-md-9 page-content">
		        <div class="inner-box">
		          <h2 class="title-2">
		            <i class="fas fa-heart"></i> My Favourite
		          </h2>
		          <div class="table-responsive">
		              
		              <table id="addManageTable" class="table table-striped table-bordered add-manage-table table demo" data-filter="#filter" data-filter-text-only="true">
		                <thead>
		                  <tr>
		                    <th data-type="numeric" data-sort-initial="true">S.n.</th>
		                    <th>Photo</th>
							<th>Category</th>
							<th>Name</th>
		                    <th>Option</th>
		                  </tr>
		                </thead>
		                <tbody>
						@php $count="1"; @endphp
						@forelse($favourite as $fav)
		                  <tr>
		                    <td style="width:2%" class="add-img-selector">
		                      	{{$count}}
		                    </td>
		                    <td style="width:14%" class="add-img-td">
		                      <a href="{{url('product')}}/{{$fav->id}}">
								@php $image = explode(',',$fav->images);  @endphp 
		                        <img class="img-thumbnail img-fluid" src="{{ asset('public/uploads/products/')}}/{{$image[0]}}" alt="img">
		                      </a>
		                    </td>
							<td style="width:5%" class="add-img-td">
								{{$fav->cate_title}}
		                    </td>
							<td style="width:20%" class="add-img-td">
								{{$fav->year}} {{$fav->title}} {{$fav->model_title}}
		                    </td>
		                    <td style="width:15%" class="action-td">
		                      <div>
		                          <a class="btn btn-danger btn-sm delete-action" href="{{ url('favourite/delete')}}/{{$fav->wshis_id}}">
		                            <i class="fa fa-trash"></i> Delete 
								</a>
		                        
		                      </div>
		                    </td>
		                  </tr>
						  @php $count++; @endphp
						  @empty
							<tr>
								<td colspan="6" class="text-center">Data not available</td>
							</tr>
						  @endforelse
		                </tbody>
		              </table>
		            </form>
		          </div>
		          <nav>
				  <div class="laravel-pagination text-center mt-5">
					{!! $favourite->onEachSide(0)->links() !!}
				</div>
				  </nav>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
@endsection
@push('custom_js')


@endpush