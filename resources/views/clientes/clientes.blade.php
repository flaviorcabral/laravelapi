@extends('layouts.app')


@section('content')


<div class="row">
		<div class="col-md-4 mt-5">
			<div class="card">
				<h5 class="card-header">Clientes</h5>
				<div class="card-body">
					<form method="post" action="{{url('/cadastra-cliente')}}">
						<h5 class="card-title">Cadastro de Clientes</h5>
						<label>Nome: </label> 
						<input type="text" name="nome" class="form-control" required>
						<br>
						<label>CNPJ: </label>
						<input type="text" name="cnpj" class="form-control" required>
						<br>
						
						<input type="hidden" name="user_id" value="1">
						
						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<!--  -->
						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-5">
			<div class="card">
				<h5 class="card-header">Clientes</h5>
				<div class="card-body">
						<h5 class="card-title">Clientes Cadastrados</h5>
						<table class="table table-striped">
							<thead>
								<th>Nome</th>
								<th>CNPJ</th>
							</thead>
							<tbody>
								@foreach($clientes as $cliente)
								<tr>
									<td>{{$cliente->nome}}</td>
									<td>{{$cliente->cnpj}}</td>
								</tr>	
								@endforeach
							</tbody>
						</table>
						
				</div>
			</div>
		</div>
</div>

<div class="row">
			<div class="col-md-6 mt-5">
			<div class="card">
				<h5 class="card-header">Logs</h5>
				<div class="card-body">
						<h5 class="card-title">Logs Gerais</h5>
						<table class="table table-striped">
							<thead>
								<th>Ação</th>
								<th>Model</th>
								<th>User_ID</th>
							</thead>
							<tbody>
								@foreach($logs as $log)
								<tr>
									<td>{{$log->acao}}</td>
									<td>{{$log->model}}</td>
									<td>{{$log->user_id}}</td>
								</tr>	
								@endforeach
							</tbody>
						</table>
						
				</div>
			</div>
		</div>
</div>

@endsection
