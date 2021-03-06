<div class="aside-menu flex-column-fluid">
	<!--begin::Aside Menu-->
	<div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
		<!--begin::Menu-->
		<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.home*') ? 'active' : '' }}" href="{{route('admin.home')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">Dashboard</span>
				</a>
			</div>
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Website Setup</span>
				</div>
			</div>
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.slider*')) here show  @elseif(request()->routeIs('admin.seoInformation*')) here show  @elseif(request()->routeIs('admin.socialInformation*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">SLIDER SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.slider.create*') ? 'active' : '' }}" href="{{url('admin/slider/create')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> Slider Create</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.slider.index*') ? 'active' : '' }}"  href="{{ route('admin.slider.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">All Slider</span>
						</a>
					</div>
				</div>
			</div>
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.companyInformation*')) here show  @elseif(request()->routeIs('admin.seoInformation*')) here show  @elseif(request()->routeIs('admin.socialInformation*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">SETTINGS</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.companyInformation*') ? 'active' : '' }}" href="{{route('admin.companyInformation')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Company Information</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.seoInformation*') ? 'active' : '' }}"  href="{{ route('admin.seoInformation') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Seo</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.socialInformation*') ? 'active' : '' }}" href="{{ route('admin.socialInformation') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Social</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.about-us*') ? 'active' : '' }}" href="{{ route('admin.about-us.update') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">About Us</span>
						</a>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Ecommerce Setup</span>
				</div>
			</div>
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.category*')) here show  @elseif(request()->routeIs('admin.seoInformation*')) here show  @elseif(request()->routeIs('admin.socialInformation*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">CATEGORY SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.category.create*') ? 'active' : '' }}" href="{{url('admin/category/create')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> Category Create</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.category.index*') ? 'active' : '' }}"  href="{{ route('admin.category.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">All Category</span>
						</a>
					</div>
				</div>
			</div>
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion @if(request()->routeIs('admin.subcategory*')) here show @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">SUBCATEGORY SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.subcategory.create*') ? 'active' : '' }}"  href="{{ url('/admin/subcategory/create') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> SubCategory Create</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.subcategory.index*') ? 'active' : '' }}" href="{{ url('/admin/subcategory/index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">All SubCategory</span>
						</a>
					</div>
				</div>
			</div>
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion @if(request()->routeIs('admin.resubcategory*')) here show @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">RESUBCATEGORY SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.resubcategory.create*') ? 'active' : '' }}"  href="{{ url('/admin/resubcategory/create') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> ReSubCategory Create</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.resubcategory.index*') ? 'active' : '' }}" href="{{ url('/admin/resubcategory/index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">All ReSubCategory</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>