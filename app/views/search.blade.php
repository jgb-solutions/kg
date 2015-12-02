<div class="modal fade" id="checheModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" hidden="true">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">
				Chèche Mizik sou Keeng.ht
				</h4>
			</div>
			<div class="modal-body">
				<form
					id="kgSearchModalForm"
					role="search"
					action="http://keeng.ht/index.php/search"
					target="new">
					<div class="input-group">
						<input
							id="query"
							name="q"
							type="text"
							class="form-control"
							placeholder="Tape yon tit mizik ou vle chèche sou Keeng">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="submit">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<div id="ahSearchResults"></div>
			</div>
			<div class="modal-footer" hidden="true">
				<button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
			</div>
		</div>
	</div>
</div>