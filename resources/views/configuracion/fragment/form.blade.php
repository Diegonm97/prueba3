<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('tarifaEPS','Tarfifa de la EPS(*).')!!}
{!!Form::text('tarifaEPS',null,['class'=>'form-control','title'=>'Tarifa EPS' , 'placeholder'=>'Ej: 12.5%','id'=>'tarifaEPS','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('tarifaARLr1','Tarfifa ARL rango 1(*).')!!}
{!!Form::text('tarifaARLr1',null,['class'=>'form-control','title'=>'Tarifa rango 1' , 'placeholder'=>'0.0522%','id'=>'tarifaARLr1','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('tarifaARLr2','Tarfifa ARL rango 2(*).')!!}
{!!Form::text('tarifaARLr2',null,['class'=>'form-control','title'=>'Tarifa rango 2' , 'placeholder'=>'Ej: 12.5%','id'=>'tarifaARLr2','required'=>'required' ])!!}
</div>
</div>
</div>
<div class="col-sm-12">
	<div class="col-sm-4">
		<div class="form-group row has-success">
		{!! Form::label('tarifaARLr3','Tarfifa ARL rango 3(*).')!!}
		{!!Form::text('tarifaARLr3',null,['class'=>'form-control','title'=>'Tarifa rango 3' , 'placeholder'=>'Ej: 12.5%','id'=>'tarifaARLr3','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('tarifaARLr4','Tarfifa ARL rango 4(*).')!!}
			{!!Form::text('tarifaARLr4',null,['class'=>'form-control','title'=>'Tarifa rango 4' , 'placeholder'=>'Ej: 12.5%','id'=>'tarifaARLr4','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('tarifaARLr5','Tarfifa ARL rango 5(*).')!!}
			{!!Form::text('tarifaARLr5',null,['class'=>'form-control','title'=>'Tarifa rango 5' , 'placeholder'=>'Ej: 12.5%','id'=>'tarifaARLr5','required'=>'required' ])!!}
		</div>
	</div>

</div>
<div class="col-sm-12">
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('tarifaAFP','Tarfifa AFP(*).')!!}
			{!!Form::text('tarifaAFP',null,['class'=>'form-control','title'=>'Tarifa AFP' , 'placeholder'=>'Ej: 12.5%','id'=>'tarifaAFP','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('cajaComp','Tarfifa caja Compensacion(*).')!!}
			{!!Form::text('cajaComp',null,['class'=>'form-control','title'=>'Tarfifa caja Compensacion' , 'placeholder'=>'Ej: 12.5%','id'=>'cajaComp','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('tarifaSena','Tarifa Sena(*).')!!}
			{!!Form::text('tarifaSena',null,['class'=>'form-control','title'=>'Tarifa Sena' , 'placeholder'=>'Ej: 4.0%','id'=>'tarifaSena','required'=>'required' ])!!}
		</div>
	</div>
</div>
<div class="col-sm-12">
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('tarifaICBF','Tarifa ICBF(*).')!!}
			{!!Form::text('tarifaICBF',null,['class'=>'form-control','title'=>'Tarifa ICBF' , 'placeholder'=>'Ej: 4.0%','id'=>'tarifaICBF','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('tarifaEPS1607','Tarifa EPS ley 1607(*).')!!}
			{!!Form::text('tarifaEPS1607',null,['class'=>'form-control','title'=>'EPS ley 1607' , 'placeholder'=>'Ej: 4.0%','id'=>'tarifaEPS1607','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('tarifaCAJA1607','Tarifa CAJA ley 1607(*).')!!}
			{!!Form::text('tarifaCAJA1607',null,['class'=>'form-control','title'=>'Tarifa CAJA ley 1607' , 'placeholder'=>'Ej: 4.0%','id'=>'tarifaCAJA1607','required'=>'required' ])!!}
		</div>
	</div>
</div>
<div class="col-sm-12">
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('IVA','Tarifa IVA(*).')!!}
			{!!Form::text('IVA',null,['class'=>'form-control','title'=>'Tarifa IVA' , 'placeholder'=>'Ej: 4.0%','id'=>'IVA','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('salarioMinimo','Tarifa salario Minimo(*).')!!}
			{!!Form::text('salarioMinimo',null,['class'=>'form-control','title'=>'Salario minimo' , 'placeholder'=>'Ej: 4.0%','id'=>'salarioMinimo','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('Activacion','Tarifa Activacion(*).')!!}
			{!!Form::text('Activacion',null,['class'=>'form-control','title'=>'Tarifa Activacion' , 'placeholder'=>'Ej: 4.0%','id'=>'Activacion','required'=>'required' ])!!}
		</div>
	</div>
</div>
<div class="col-sm-12">
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('DiasHabiles','Tarifa DiasHabiles(*).')!!}
			{!!Form::text('DiasHabiles',null,['class'=>'form-control','title'=>'Tarifa DiasHabiles' , 'placeholder'=>'Ej: 4.0%','id'=>'DiasHabiles','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('IndepVencimiento','Tarifa IndepVencimiento(*).')!!}
			{!!Form::text('IndepVencimiento',null,['class'=>'form-control','title'=>'IndepVencimiento' , 'placeholder'=>'Ej: 4.0%','id'=>'IndepVencimiento','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('Intereses','Tarifa Intereses(*).')!!}
			{!!Form::text('Intereses',null,['class'=>'form-control','title'=>'Tarifa Intereses' , 'placeholder'=>'Ej: 4.0%','id'=>'Intereses','required'=>'required' ])!!}
		</div>
	</div>
</div>
<div class="form-group text-center">
{!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 