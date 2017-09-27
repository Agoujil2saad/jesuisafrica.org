@extends('layouts.master_1')
@section('styles')
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Dekko|Rouge+Script');

</style>
@endsection
@section('content')
<div class="row">	
	<div class="row" id="present">
		<div class="twelve wide column">
			<img src="{{asset('images/logo.png')}}" class="ui medium centered image">
		</div>
	</div>
</div>
<div class="row">
	<table class="ui very basic collapsing celled table">
		<thead>
			<tr>
				<th></th>
				<th>Télécharger</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<i class="file pdf outline massive red icon"></i>
				</td>
				<td>
					<h1><a href="{{asset('/pdfs/fiche_technique_fr.pdf')}}" target="_blank">Fiche Technique : Association Internationale Clé Pour la Paix</a></h1>
				</td>
			</tr>
			<tr>
				<td>
					<i class="file pdf outline massive red icon"></i>
				</td>
				<td>
					<h1><a href="{{asset('/pdfs/forum_association_thématique.pdf')}}" target="_blank">Thématique du forum : Association Internationale Clefs Pour la Paix</a></h1>
				</td>
			</tr>
			<tr>
				<td>
					<i class="file pdf outline massive red icon"></i>
				</td>
				<td>
					<h1><a href="{{asset('/pdfs/meknes_rapport_fr.pdf')}}" target="_blank">Le 1er Forum du Dialogue et de l’Investissement Africain</a></h1>
				</td>
			</tr>
			<tr>
				<td>
					<i class="file pdf outline massive red icon"></i>
				</td>
				<td>
					<h1><a href="{{asset('/pdfs/table_ronde_ar.pdf')}}" target="_blank">ملتقى الحوار والاستثمار الإفريقي الاول تحت شعار: افريقيا ...حضارات وتعايش</a></h1>
				</td>
			</tr>
			<tr>
				<td>
					<i class="file pdf outline massive red icon"></i>
				</td>
				<td>
					<h1><a href="{{asset('/pdfs/fiche_technique_ar.pdf')}}" target="_blank">بطاقـــة تقنيـــة :جمعية مفتاح السلام الدولية للتنمية والتضامن</a></h1>
				</td>
			</tr>
			<tr>
				<td>
					<i class="file pdf outline massive red icon"></i>
				</td>
				<td>
					<h1><a href="{{asset('/pdfs/meknes_rapport_ar.pdf')}}" target="_blank">التقرير التركيبي: لملتقى الحوار والاستثمار الافريقي الاول تحت شعار - افريقيا حضارات وتعايش</a></h1>
				</td>
			</tr>
		</tbody>
	</table>
</div>


@endsection