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
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> 
   		<a href="{{ URL::to('mahasiswa?return='.$return) }}" class="tips btn btn-xs btn-default pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('mahasiswa/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>ID Registrasi</td>
						<td>{{ $row->mahasiswa_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Jurusan</td>
						<td>{!! SiteHelpers::gridDisplayView($row->jurusan_id,'jurusan_id','1:tb_jurusan:jurusan_id:nama_jurusan|tahun_ajaran') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nama Mahasiswa</td>
						<td>{{ $row->nama_mahasiswa }} </td>
						
					</tr>
				
					<tr>
						<td width='40%' class='label-view text-right'>Tmp/Tgl Lahir</td>
						<td>{{ $row->tmp_lahir }}, {{ $row->tgl_lahir }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Jenis Kelamin</td>
						<td>{!! SiteHelpers::gridDisplayView($row->jenkel,'jenkel','1:tb_jenkel:id:jenkel') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ukuran Jas</td>
						<td>{!! SiteHelpers::gridDisplayView($row->ukuranjas,'ukuranjas','1:tb_ukuranjas:id:ukuran') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Alamat</td>
						<td>{{ $row->alamat }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>No Hp</td>
						<td>{{ $row->no_hp }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nama Ortu</td>
						<td>{{ $row->nama_ortu }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop