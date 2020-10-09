@extends('master')
@section('titulo','Lista de Treinamentos')
@section('corpo')
<br/>
<h1 class="text-center text-uppercase text-dark">Treinamentos</h1>
<br/>
<table class="table table-striped">
<tr >
	<th>NOME</th>
	<th>FORNECEDOR</th>
	<th>ÍNÍCIO</th>
	<th>FIM</th>
	<th>COMANDO</th>
</tr>
<!-- Loop pela coleção de departamentos -->
@foreach($treinamentos as $t)
<tr>
	<td>{{$t->nome}}</td>
	<td>{{$t->fornecedor}}</td>
	<td>{{$t->inicio}}</td>
	<td>{{$t->fim}}</td>
	<th>
		<a href="/treinamento/{{$t->id}}" class="btn btn-secondary btn-sm">Detalhe</a>
		<a href="/treinamento/{{$t->id}}/edit" class="btn btn-dark btn-sm">Editar</a>
	</th>
</tr> 
@endforeach
</table>

  <div class="row">
    <div class="col center">
		<a href="/treinamento/create" class="btn btn-dark btn-sm">Adicionar Novo Treinamento</a>
	</div>
    <div class="col-md-auto">
		{{$treinamentos->links() }}
	</div>
    <div class="col center">
		<a href="../funcionario/" class="btn btn-dark btn-sm">Visualizar Funcionários</a>
	</div>
  </div>



@endsection


<style type="text/css">
	.center {
    	text-align:  center;
	}
</style>