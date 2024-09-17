<div>
<div class="col-md-12">


<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Horizontal Form</h3>
</div>


<form class="form-horizontal" wire:submit="save">
<div class="card-body">
<div class="form-group row">
<label for="inputEmail3" class="col-sm-2 col-form-label">title</label>
<div class="col-sm-10">
<input type="email" class="form-control" id="inputEmail3" placeholder="Email" wire:model="title">
</div>
</div>
<div class="form-group row">
<label for="inputPassword3" class="col-sm-2 col-form-label">content</label>
<div class="col-sm-10">
<input type="password" class="form-control" id="inputPassword3" placeholder="Password" wire:model="content"> 
</div>
</div>

</div>
</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-info">Cadastrar</button>

</div>

</form>
</div>

</div>
</div>
