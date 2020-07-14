<!DOCTYPE html>
<html lang = "en">
	@include('public.part.head')
	<body>
		<div class="boxed">
			<div class="header">
				@include('public.part.wrappertop')
				@include('public.part.menu_sticky')
			</div>
			<div class="content">
				<div class="wrapper">
					<div class="main-content">
						<div class="full-width">
							@yield('content')
						</div>
					  	<div class="clear-float"></div>
					</div>
				</div>
			</div>
			<div class="footer">
				@include('public.part.footer')
			</div>
		</div>
		@include('public.part.foot')
		@yield('scripts')
	</body>
</html>