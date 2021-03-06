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
		<li><a href="{{ URL::to('persyaratan?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'persyaratan/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> Persyaratan</legend>
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="Persyaratan Id" class=" control-label col-md-4 text-left"> Persyaratan Id </label>
									<div class="col-md-6">
									  {!! Form::text('persyaratan_id', $row['persyaratan_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Mahasiswa Id" class=" control-label col-md-4 text-left"> Mahasiswa Id <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  <select name='mahasiswa_id' rows='5' id='mahasiswa_id' class='select2 ' required  ></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Lengkap" class=" control-label col-md-4 text-left"> Lengkap </label>
									<div class="col-md-6">
									  <select name='lengkap[]' multiple rows='5' id='lengkap' class='select2 '   ></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Belum Lengkap" class=" control-label col-md-4 text-left"> Belum Lengkap </label>
									<div class="col-md-6">
									  <select name='belum_lengkap[]' multiple rows='5' id='belum_lengkap' class='select2 '   ></select> 
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
					<button type="button" onclick="location.href='{{ URL::to('persyaratan?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#mahasiswa_id").jCombo("{{ URL::to('persyaratan/comboselect?filter=tb_mahasiswa:mahasiswa_id:mahasiswa_id|nama_mahasiswa') }}",
		{  selected_value : '{{ $row["mahasiswa_id"] }}' });
		
		$("#lengkap").jCombo("{{ URL::to('persyaratan/comboselect?filter=dt_syarat:nama_syarat:nama_syarat') }}",
		{  selected_value : '{{ $row["lengkap"] }}' });
		
		$("#belum_lengkap").jCombo("{{ URL::to('persyaratan/comboselect?filter=dt_syarat:nama_syarat:nama_syarat') }}",
		{  selected_value : '{{ $row["belum_lengkap"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop