@extends('layouts.master_1')
@section('content')
<div class="row">
	<div class=" five wide column">
		<img src="{{asset('images/logo.png')}}" class="ui fluid image">
	</div>
</div>
<div class="row" style="padding: 2em 0;">
	<div class=" fouteen wide column">
		<div class="ui centered grid">
			<div class="row">
				<div class="nine wide column">
					<form method="POST" action="{{ url('/join_us') }}">
						{{ csrf_field() }}
						<div class="ui form segment">
							<div class="two fields">
								<div class="field">
									<label>Nom complet*</label>
									<div class="ui left icon input">
										<input placeholder="Nom complet" name="nom" type="text" required>
										<i class="user icon orange"></i>
									</div>
								</div>
								<div class="field">
									<label>Sectionner pays*</label>
									<select class="ui search selection dropdown" name="pays" id="search-select" required>
										<option value="">Pays</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Aland Islands">Aland Islands</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antigua">Antigua</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia">Bosnia</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Virgin Islands">British Virgin Islands</option>
										<option value="Brunei">Brunei</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burma">Burma</option>
										<option value="Burundi">Burundi</option>
										<option value="Caicos Islands">Caicos Islands</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos Islands">Cocos Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo Brazzaville">Congo Brazzaville</option>
										<option value="Congo">Congo</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote Divoire">Cote Divoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="England">England</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="European Union">European Union</option>
										<option value="Falkland Islands">Falkland Islands</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Territories">French Territories</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea-Bissau</option>
										<option value="Guinea">Guinea</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Heard">Heard Island</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indian">Indian Ocean Territory</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran">Iran</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macau">Macau</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia">Micronesia</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montenegro">Montenegro</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands Antilles</option>
										<option value="Netherlands">Netherlands</option>
										<option value="New">New Caledonia</option>
										<option value="New">New Guinea</option>
										<option value="New">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk">Norfolk Island</option>
										<option value="North">North Korea</option>
										<option value="Northern">Northern Mariana Islands</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Palestine">Palestine</option>
										<option value="Panama">Panama</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Pitcairn">Pitcairn Islands</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russia">Russia</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint">Saint Helena</option>
										<option value="Saint">Saint Kitts and Nevis</option>
										<option value="Saint">Saint Lucia</option>
										<option value="Saint">Saint Pierre</option>
										<option value="Saint">Saint Vincent</option>
										<option value="Samoa">Samoa</option>
										<option value="San">San Marino</option>
										<option value="Sandwich">Sandwich Islands</option>
										<option value="Sao">Sao Tome</option>
										<option value="Saudi">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia">Serbia</option>
										<option value="Serbia">Serbia</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South">South Africa</option>
										<option value="South">South Korea</option>
										<option value="Spain">Spain</option>
										<option value="Sri">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard">Svalbard</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syria">Syria</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Timorleste">Timorleste</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad">Trinidad</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United">United Arab Emirates</option>
										<option value="United">United States</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Us">Us Minor Islands</option>
										<option value="Us">Us Virgin Islands</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Vatican">Vatican City</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Wallis">Wallis and Futuna</option>
										<option value="Western">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
								</div>
							</div>
							<div class="two fields">
								<div class="field">
									<label>E-mail*</label>
									<div class="ui left icon input">
										<input type="email" name="email" placeholder="Email" required>
										<i class="mail outline icon orange"></i>
									</div>
								</div>
								<div class="field">
									<label>Téléphone*</label>
									<div class="ui left icon input">
										<input name="telephone" placeholder="Téléphone" type="tel" required>
										<i class="volume control phone icon orange"></i>
									</div>
								</div>
							</div>
							<div class="two fields">
								<div class="field">
									<label>Adresse*</label>
									<div class="ui left icon input">
										<input type="text" name="adresse" placeholder="Adresse" required>
										<i class="address book icon orange"></i>
									</div>
								</div>
							</div>
							<div class="ui one column stackable center aligned page grid">
								<div class="column twelve wide">
									<button class="ui orange right labeled icon button">
									@lang('lang.envoyer_demande')
									<i class="right chevron icon"></i>
									</button>
								</div>
							</div>
							<p>Tout les champs avec * doivent être obligatoirement remplis</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
	$('.ui.dropdown').dropdown();
</script>
@endsection