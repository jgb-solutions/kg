	</div>
</section>

<section id="notice-section" class="bg-red">
	<div class="container">
		<div class="errors text-center text-uppercase">
		</div>
	</div>
</section>
<section class="bg-white" id="second-main">
	<div class="container text-center">
		<h3 class="text-uppercase" id="songTitle"></h3>
		@include('download-buttons')
	</div>
</section>

<section id="footer" class="bg-black">
	<div class="container">
		<div class="col-sm-12">
			<div class="row">

				<div class="col-sm-12">
					<span class="glyphicon glyphicon-share-alt"></span> Pataje KG sou:
					@include('sharing')
					<hr>
				</div>
				<div class="col-sm-6 hidden-xs">
					<ul class="list-unstyled">
						@include('nav-links')
					</ul>
				</div>

				@if ( $count > 0 )
				<div class="col-sm-6">
					<h4>
						<span class="glyphicon glyphicon-ok"></span>
						Gen <span class="count">{{ $count }}</span> mizik Keeng ki gentan telechaje gratis ak sèvis nou an. <br><br> __/\_(-_-)_/\__
					</h4>
				</div>
				@endif

			</div>
			<hr>
		</div>
		<div class="col-sm-6">
			<div class="row">
                <div class="col-xs-4">
                	<a
                		href="https://twitter.com/keengfree"
                		target="_blank"
                		class="btn btn-info btn-large btn-block"
                		title="Swiv Keeng Gratis sou Twitter">
                		<i class="fa fa-2x fa-twitter"></i>
                	</a>
                </div>
                <div class="col-xs-4">
                	<a
                		href="https://www.facebook.com/504535793062337"
                		target="_blank"
                		class="btn btn-primary btn-large btn-block"
                		title="Swiv Keeng Gratis sou Facebook">
                		<i class="fa fa-2x fa-facebook"></i>
                	</a>
                </div>
            </div>
		</div>
		<div class="col-sm-6">
			<hr class="visible-xs">
			<p class="text-center">&copy; {{ date('Y') }} Keeng Gratis <br>__/\_(-_-)_/\__</p>
		</div>
		<div class="col-sm-12">
			<hr>
			<p>NB: Keeng Gratis pa gen okenn rapò ak sèvis Keeng Natcom nan ni lòt sèvis nan menm jan an. Se jis yon sèvis ki kreye pou montre responsab sèvis Keeng yo kòman li pa difisil pou eksplwate fay nan sistèm yo a ki ap fè ni atis yo ni konpayi a pèdi lajan. Nou pa responsab move itilazyon sèvis sa a. Si fanatik yon atis vle sipòte li tout bon, achte mizik atis la.</p>
		</div>
	</div>
</section>
</div><!-- end #wrapper -->

@include('search')
@include('info')
@include('contact')
@include('scripts')

</body>
</html>