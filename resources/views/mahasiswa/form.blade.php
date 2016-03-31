@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('mahasiswa?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active">{{ Lang::get('core.addedit') }} </li>
      </ul>
	  	  
    </div>
 
 	<div class="page-content-wrapper">

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	

		 {!! Form::open(array('url'=>'mahasiswa/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> Mahasiswa</legend>
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="ID Registrasi" class=" control-label col-md-4 text-left"> ID Registrasi </label>
									<div class="col-md-6">
									  {!! Form::text('mahasiswa_id', $row['mahasiswa_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Jurusan Id" class=" control-label col-md-4 text-left"> Pilih Jurusan <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  <select name='jurusan_id' rows='5' id='jurusan_id' class='select2 ' required  ></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Nama Mahasiswa" class=" control-label col-md-4 text-left"> Nama Mahasiswa <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  {!! Form::text('nama_mahasiswa', $row['nama_mahasiswa'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Tmp Lahir" class=" control-label col-md-4 text-left"> Tempat/Tgl Lahir </label>
									<div class="col-md-3">
									  {!! Form::text('tmp_lahir', $row['tmp_lahir'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-4">
									 <div class="input-group m-b" style="width:150px !important;">
										{!! Form::text('tgl_lahir', $row['tgl_lahir'],array('class'=>'form-control date')) !!}
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									</div> 
									</div>
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
									
								  <div class="form-group  " >
									<label for="Jenkel" class=" control-label col-md-4 text-left"> Jenis Kelamin </label>
									<div class="col-md-6">
									  <select name='jenkel' rows='5' id='jenkel' class='select2 '   ></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Agama" class=" control-label col-md-4 text-left"> Agama </label>
									<div class="col-md-6">
									  
									<label class='radio radio-inline'>
									<input type='radio' name='agama' value ='Islam'  @if($row['agama'] == 'Islam') checked="checked" @endif > Islam </label>
									<label class='radio radio-inline'>
									<input type='radio' name='agama' value ='Kristen'  @if($row['agama'] == 'Kristen') checked="checked" @endif > Kristen </label>
									<label class='radio radio-inline'>
									<input type='radio' name='agama' value ='Hindu'  @if($row['agama'] == 'Hindu') checked="checked" @endif > Hindu </label>
									<label class='radio radio-inline'>
									<input type='radio' name='agama' value ='Budha'  @if($row['agama'] == 'Budha') checked="checked" @endif > Budha </label>
									<label class='radio radio-inline'>
									<input type='radio' name='agama' value ='Konghucu'  @if($row['agama'] == 'Konghucu') checked="checked" @endif > Khonghucu </label> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Ukuranjas" class=" control-label col-md-4 text-left"> Ukuran Jas Almamater </label>
									<div class="col-md-6">
									  <select name='ukuranjas' rows='5' id='ukuranjas' class='select2 '   ></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="S Kerja" class=" control-label col-md-4 text-left"> Status Pekerjaan </label>
									<div class="col-md-6">
									  
					<label class='radio radio-inline'>
					<input type='radio' name='s_kerja' value ='Belum berkerja'  @if($row['s_kerja'] == 'Belum berkerja') checked="checked" @endif > Belum Berkerja </label>
					<label class='radio radio-inline'>
					<input type='radio' name='s_kerja' value ='Berkerja'  @if($row['s_kerja'] == 'Berkerja') checked="checked" @endif > Berkerja </label> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="S Nikah" class=" control-label col-md-4 text-left"> Status Pernikahan </label>
									<div class="col-md-6">
									  
					<label class='radio radio-inline'>
					<input type='radio' name='s_nikah' value ='Belum menikah'  @if($row['s_nikah'] == 'Belum menikah') checked="checked" @endif > Belum menikah </label>
					<label class='radio radio-inline'>
					<input type='radio' name='s_nikah' value ='Menikah'  @if($row['s_nikah'] == 'Menikah') checked="checked" @endif > Menikah </label>
					<label class='radio radio-inline'>
					<input type='radio' name='s_nikah' value ='Pernah menikah'  @if($row['s_nikah'] == 'Pernah menikah') checked="checked" @endif > Pernah menikah </label> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Alamat" class=" control-label col-md-4 text-left"> Alamat Lengkap </label>
									<div class="col-md-6">
									  <textarea name='alamat' rows='5' id='alamat' class='form-control '  
				           >{{ $row['alamat'] }}</textarea> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="No Hp" class=" control-label col-md-4 text-left"> Nomor HP <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  {!! Form::text('no_hp', $row['no_hp'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true', 'parsley-type'=>'number'   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Nama Ortu" class=" control-label col-md-4 text-left"> Nama Orang Tua </label>
									<div class="col-md-6">
									  {!! Form::text('nama_ortu', $row['nama_ortu'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Nama Suis" class=" control-label col-md-4 text-left"> Nama Suami/Istri </label>
									<div class="col-md-6">
									  {!! Form::text('nama_suis', $row['nama_suis'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Pendidikan Terakhir" class=" control-label col-md-4 text-left"> Pendidikan Terakhir </label>
									<div class="col-md-6">
									  {!! Form::text('pendidikan_terakhir', $row['pendidikan_terakhir'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Alamat Skolah" class=" control-label col-md-4 text-left"> Alamat Skolah </label>
									<div class="col-md-6">
									  <textarea name='alamat_skolah' rows='5' id='alamat_skolah' class='form-control '  
				           >{{ $row['alamat_skolah'] }}</textarea> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('mahasiswa?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#jurusan_id").jCombo("{{ URL::to('mahasiswa/comboselect?filter=tb_jurusan:jurusan_id:nama_jurusan|tahun_ajaran') }}",
		{  selected_value : '{{ $row["jurusan_id"] }}' });
		
		$("#jenkel").jCombo("{{ URL::to('mahasiswa/comboselect?filter=tb_jenkel:id:jenkel') }}",
		{  selected_value : '{{ $row["jenkel"] }}' });
		
		$("#ukuranjas").jCombo("{{ URL::to('mahasiswa/comboselect?filter=tb_ukuranjas:id:ukuran') }}",
		{  selected_value : '{{ $row["ukuranjas"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop