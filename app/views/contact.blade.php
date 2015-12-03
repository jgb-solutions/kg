<div class="modal fade" id="kontakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title text-center" id="exampleModalLabel">
					<span class="glyphicon glyphicon-info-sign"></span>
					Itilize fòm nan pou kontakte nou
					<br><small>Si nou twouve li nesesè n'ap fè w repons.</small>

				</h3>
			</div>
			<div class="modal-body">
				<form method="post" role="form" id="kgContactModalForm">
					<div class="form-group">
						<label for="name">
						<span class="glyphicon glyphicon-user"></span>
						Non ou</label>
						<input
							type="text"
							class="form-control"
							id="name"
							placeholder="Tape non ou"
							{{-- required="required" --}}
							name="name">
						<span class="text-danger error">Fòk ou antre non ou</span>
					</div>

					<div class="form-group">
						<label for="email">
						<span class="glyphicon glyphicon-envelope"></span>
						Imel ou</label>
						<input
							type="email"
							class="form-control"
							id="email"
							placeholder="Tape imel ou"
							{{-- required="required" --}}
							name="email">
						<span class="text-danger error">Fòk ou antre imel ou</span>
					</div>

					<div class="form-group">
						<label for="message">
						<span class="glyphicon glyphicon-comment"></span> Mesaj</label>
						<textarea
							name="message"
							id="message"
							class="form-control"
							rows="3"
							{{-- required="required" --}}
							placeholder="Tape mesaj ou a"
							></textarea>
						<span class="text-danger error">Fòk ou ekri mesaj ou a</span>
					</div>

					<button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-glyphicon glyphicon-send"></span> Voye Mesaj la</button>
				</form>

				<div id="response"></div>
			</div>
			<div class="modal-footer" hidden="true">
				@include('social-links')
			</div>
		</div>
	</div>
</div>