@extends('layouts.master_1')
@section('styles')
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Dekko|Rouge+Script');

td,th{
	padding: 1.4em;
	}
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
	<table class="ui unstackable celled table">
		<thead>
			<tr class="center aligned">
				<th></th>
				<th>Télécharger</th>
			</tr>
		</thead>
		<tbody>
			<tr class="center aligned">
				<td>
					<i class="file pdf outline huge red icon"></i>
				</td>
				<td>
					<h3>
						<a href="{{asset('/pdfs/fiche_technique_fr.pdf')}}" target="_blank">Fiche Technique : Association Internationale Clé De la Paix</a>
					</h3>
				</td>
			</tr>
			<tr class="center aligned">
				<td>
					<i class="file pdf outline huge red icon"></i>
				</td>
				<td>
					<h3>
						<a href="{{asset('/pdfs/forum_association_thématique.pdf')}}" target="_blank">Thématique du forum : Association Internationale Clefs De la Paix</a>
					</h3>
				</td>
			</tr>
			<tr class="center aligned">
				<td>
					<i class="file pdf outline huge red icon"></i>
				</td>
				<td>
					<h3>
						<a href="{{asset('/pdfs/meknes_rapport_fr.pdf')}}" target="_blank">Le 1er Forum du Dialogue et de l’Investissement Africain</a>
					</h3>
				</td>
			</tr>
			<tr class="center aligned">
				<td>
					<i class="file pdf outline huge red icon"></i>
				</td>
				<td>
					<h3>
						<a href="{{asset('/pdfs/table_ronde_ar.pdf')}}" target="_blank">ملتقى الحوار والاستثمار الإفريقي الاول تحت شعار: افريقيا ...حضارات وتعايش</a>
					</h3>
				</td>
			</tr>
			<tr class="center aligned">
				<td>
					<i class="file pdf outline huge red icon"></i>
				</td>
				<td>
					<h3>
						<a href="{{asset('/pdfs/fiche_technique_ar.pdf')}}" target="_blank">بطاقـــة تقنيـــة :جمعية مفتاح السلام الدولية للتنمية والتضامن</a>
					</h3>
				</td>
			</tr>
			<tr class="center aligned">
				<td>
					<i class="file pdf outline huge red icon"></i>
				</td>
				<td>
					<h3>
						<a href="{{asset('/pdfs/meknes_rapport_ar.pdf')}}" target="_blank">التقرير التركيبي: لملتقى الحوار والاستثمار الافريقي الاول تحت شعار - افريقيا حضارات وتعايش</a>
					</h3>
				</td>
			</tr>
		</tbody>
	</table>
</div>


@endsection