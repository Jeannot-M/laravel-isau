@extends('layout.main')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/master.css') }}">
@endsection

@section('content')
<form autocomplete="off" action="{{ route('student.store') }}" method="POST" novalidate>
    @csrf
    <div class="row">
        <div class="col-md-4 blog-sidebar p-3">
            <h2 class="display-4 font-weight-bold p-4 text-center text-uppercase">Formulaire d'inscription</h2>
            <p class="p-4">Le formulaire ci-contre vous sert d'enregistrement au concours qu'organise notre établissement. Et pour etre admis au concours d'entrée en préparatoire, le candidat doit déposer un dossier comprenant : </p>

            <ul class="ml-4">
                <li class="my-3 font-weight-bold text-danger">La lettre de demande d'inscription</li>
                <li class="my-3 font-weight-bold text-danger">Bulletin d'inscription</li>
                <li class="my-3 font-weight-bold text-danger">Photocopie diplome d'Etat</li>
                <li class="my-3 font-weight-bold text-danger">Photocopies légalisées des bulletins 5ème et 6ème Secondaires;</li>
                <li class="my-3 font-weight-bold text-danger">Attestation de naissance;</li>
                <li class="my-3 font-weight-bold text-danger">Certificat de nationalité ou photocopie recto-verso de la carte d'identité;</li>
                <li class="my-3 font-weight-bold text-danger">Certificat d'aptitude physique</li>
                <li class="my-3 font-weight-bold text-danger">Attestation de bonne vie et moeurs</li>
                <li class="my-3 font-weight-bold text-danger">4 Photos en format passeport</li>
            </ul>

        </div>
        <div class="col-md-8 p-3 pl-5">
           <div class="row pl-5">

            <div class="col-12">
                <h5 class="text-center mx-auto p-1 font-weight-bold">Informations personnelles</h5>
            </div>

                <div class="col-12 pt-5">
                    <div class="form-group">
                        <select id="my-select" class="form-control rounded-0 @error('titre') is-invalid @enderror" name="titre">
                            <option selected>Vous etes ...</option>
                            <option value="1">Mademoiselle</option>
                            <option value="2">Madame</option>
                            <option value="3">Monsieur</option>
                        </select>
                    </div>
                                @error('titre') 
                                <div class="invalid-tooltip">{{ $errors->first('titre') }}</div>
                                @enderror
                </div>
        
                 <div class="col-12">
                    <div class="form-group">
                        <input id="my-input" class="form-control p_input rounded-0 @error('names') is-invalid @enderror" type="text" name="names" placeholder="Entrer votre nom complet">
                        <small class="form-text text-muted">Renseignez votre Nom, Post-nom et Prenom</small>
        
                    </div>
                                @error('names') 
                                <div class="invalid-tooltip">{{ $errors->first('names') }}</div>
                                @enderror
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <input id="my-input" class="form-control p_input rounded-0 @error('datenais') is-invalid @enderror" type="date" name="datenais" placeholder="Entrer votre nom complet">
                        <small class="form-text text-muted">Date de naissance</small>
        
                    </div>
                                @error('datenais') 
                                <div class="invalid-tooltip">{{ $errors->first('datenais') }}</div>
                                @enderror
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <select id="my-select" class="form-control rounded-0" name="civil">
                            <option selected>Etat civil</option>
                            <option value="1">Marié(e)</option>
                            <option value="2">Divorcé(e)</option>
                            <option value="3">Célibataire</option>
                            <option value="3">Veuf(ve)</option>
                        </select>
                    </div>
                                @error('civil') 
                                <div class="invalid-tooltip">{{ $errors->first('civil') }}</div>
                                @enderror
                </div>

                <div class="col-7">
                    <div class="form-group">
                        <input id="my-input" class="form-control p_input rounded-0 @error('address') is-invalid @enderror" type="text" name="address" placeholder="Adresse complet">
                        <small class="form-text text-muted">Exemple : N° 210, av. culuma, C/ lingwala</small>
        
                    </div>
                                @error('address') 
                                <div class="invalid-tooltip">{{ $errors->first('address') }}</div>
                                @enderror
                </div>

                <div class="col-5">
                    <div class="form-group">
                        <input id="my-input" class="form-control p_input rounded-0 @error('address') is-invalid @enderror" type="text" name="address" placeholder="N° Téléphone">
                        <small class="form-text text-muted">Votre numero de téléphone</small>
        
                    </div>
                                @error('address') 
                                <div class="invalid-tooltip">{{ $errors->first('address') }}</div>
                                @enderror
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <select id="my-select" class="form-control rounded-0" name="pays">
                                <option value="France" selected="selected">France </option>
                                
                                <option value="Afghanistan">Afghanistan </option>
                                <option value="Afrique_Centrale">Afrique_Centrale </option>
                                <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                <option value="Albanie">Albanie </option>
                                <option value="Algerie">Algerie </option>
                                <option value="Allemagne">Allemagne </option>
                                <option value="Andorre">Andorre </option>
                                <option value="Angola">Angola </option>
                                <option value="Anguilla">Anguilla </option>
                                <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                <option value="Argentine">Argentine </option>
                                <option value="Armenie">Armenie </option>
                                <option value="Australie">Australie </option>
                                <option value="Autriche">Autriche </option>
                                <option value="Azerbaidjan">Azerbaidjan </option>
                                
                                <option value="Bahamas">Bahamas </option>
                                <option value="Bangladesh">Bangladesh </option>
                                <option value="Barbade">Barbade </option>
                                <option value="Bahrein">Bahrein </option>
                                <option value="Belgique">Belgique </option>
                                <option value="Belize">Belize </option>
                                <option value="Benin">Benin </option>
                                <option value="Bermudes">Bermudes </option>
                                <option value="Bielorussie">Bielorussie </option>
                                <option value="Bolivie">Bolivie </option>
                                <option value="Botswana">Botswana </option>
                                <option value="Bhoutan">Bhoutan </option>
                                <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                <option value="Bresil">Bresil </option>
                                <option value="Brunei">Brunei </option>
                                <option value="Bulgarie">Bulgarie </option>
                                <option value="Burkina_Faso">Burkina_Faso </option>
                                <option value="Burundi">Burundi </option>
                                
                                <option value="Caiman">Caiman </option>
                                <option value="Cambodge">Cambodge </option>
                                <option value="Cameroun">Cameroun </option>
                                <option value="Canada">Canada </option>
                                <option value="Canaries">Canaries </option>
                                <option value="Cap_vert">Cap_Vert </option>
                                <option value="Chili">Chili </option>
                                <option value="Chine">Chine </option>
                                <option value="Chypre">Chypre </option>
                                <option value="Colombie">Colombie </option>
                                <option value="Comores">Colombie </option>
                                <option value="Congo">Congo </option>
                                <option value="Congo_democratique">Congo_democratique </option>
                                <option value="Cook">Cook </option>
                                <option value="Coree_du_Nord">Coree_du_Nord </option>
                                <option value="Coree_du_Sud">Coree_du_Sud </option>
                                <option value="Costa_Rica">Costa_Rica </option>
                                <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                <option value="Croatie">Croatie </option>
                                <option value="Cuba">Cuba </option>
                                
                                <option value="Danemark">Danemark </option>
                                <option value="Djibouti">Djibouti </option>
                                <option value="Dominique">Dominique </option>
                                
                                <option value="Egypte">Egypte </option>
                                <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                <option value="Equateur">Equateur </option>
                                <option value="Erythree">Erythree </option>
                                <option value="Espagne">Espagne </option>
                                <option value="Estonie">Estonie </option>
                                <option value="Etats_Unis">Etats_Unis </option>
                                <option value="Ethiopie">Ethiopie </option>
                                
                                <option value="Falkland">Falkland </option>
                                <option value="Feroe">Feroe </option>
                                <option value="Fidji">Fidji </option>
                                <option value="Finlande">Finlande </option>
                                <option value="France">France </option>
                                
                                <option value="Gabon">Gabon </option>
                                <option value="Gambie">Gambie </option>
                                <option value="Georgie">Georgie </option>
                                <option value="Ghana">Ghana </option>
                                <option value="Gibraltar">Gibraltar </option>
                                <option value="Grece">Grece </option>
                                <option value="Grenade">Grenade </option>
                                <option value="Groenland">Groenland </option>
                                <option value="Guadeloupe">Guadeloupe </option>
                                <option value="Guam">Guam </option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernesey">Guernesey </option>
                                <option value="Guinee">Guinee </option>
                                <option value="Guinee_Bissau">Guinee_Bissau </option>
                                <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                <option value="Guyana">Guyana </option>
                                <option value="Guyane_Francaise ">Guyane_Francaise </option>
                                
                                <option value="Haiti">Haiti </option>
                                <option value="Hawaii">Hawaii </option>
                                <option value="Honduras">Honduras </option>
                                <option value="Hong_Kong">Hong_Kong </option>
                                <option value="Hongrie">Hongrie </option>
                                
                                <option value="Inde">Inde </option>
                                <option value="Indonesie">Indonesie </option>
                                <option value="Iran">Iran </option>
                                <option value="Iraq">Iraq </option>
                                <option value="Irlande">Irlande </option>
                                <option value="Islande">Islande </option>
                                <option value="Israel">Israel </option>
                                <option value="Italie">italie </option>
                                
                                <option value="Jamaique">Jamaique </option>
                                <option value="Jan Mayen">Jan Mayen </option>
                                <option value="Japon">Japon </option>
                                <option value="Jersey">Jersey </option>
                                <option value="Jordanie">Jordanie </option>
                                
                                <option value="Kazakhstan">Kazakhstan </option>
                                <option value="Kenya">Kenya </option>
                                <option value="Kirghizstan">Kirghizistan </option>
                                <option value="Kiribati">Kiribati </option>
                                <option value="Koweit">Koweit </option>
                                
                                <option value="Laos">Laos </option>
                                <option value="Lesotho">Lesotho </option>
                                <option value="Lettonie">Lettonie </option>
                                <option value="Liban">Liban </option>
                                <option value="Liberia">Liberia </option>
                                <option value="Liechtenstein">Liechtenstein </option>
                                <option value="Lituanie">Lituanie </option>
                                <option value="Luxembourg">Luxembourg </option>
                                <option value="Lybie">Lybie </option>
                                
                                <option value="Macao">Macao </option>
                                <option value="Macedoine">Macedoine </option>
                                <option value="Madagascar">Madagascar </option>
                                <option value="Madère">Madère </option>
                                <option value="Malaisie">Malaisie </option>
                                <option value="Malawi">Malawi </option>
                                <option value="Maldives">Maldives </option>
                                <option value="Mali">Mali </option>
                                <option value="Malte">Malte </option>
                                <option value="Man">Man </option>
                                <option value="Mariannes du Nord">Mariannes du Nord </option>
                                <option value="Maroc">Maroc </option>
                                <option value="Marshall">Marshall </option>
                                <option value="Martinique">Martinique </option>
                                <option value="Maurice">Maurice </option>
                                <option value="Mauritanie">Mauritanie </option>
                                <option value="Mayotte">Mayotte </option>
                                <option value="Mexique">Mexique </option>
                                <option value="Micronesie">Micronesie </option>
                                <option value="Midway">Midway </option>
                                <option value="Moldavie">Moldavie </option>
                                <option value="Monaco">Monaco </option>
                                <option value="Mongolie">Mongolie </option>
                                <option value="Montserrat">Montserrat </option>
                                <option value="Mozambique">Mozambique </option>
                                
                                <option value="Namibie">Namibie </option>
                                <option value="Nauru">Nauru </option>
                                <option value="Nepal">Nepal </option>
                                <option value="Nicaragua">Nicaragua </option>
                                <option value="Niger">Niger </option>
                                <option value="Nigeria">Nigeria </option>
                                <option value="Niue">Niue </option>
                                <option value="Norfolk">Norfolk </option>
                                <option value="Norvege">Norvege </option>
                                <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
                                
                                <option value="Oman">Oman </option>
                                <option value="Ouganda">Ouganda </option>
                                <option value="Ouzbekistan">Ouzbekistan </option>
                                
                                <option value="Pakistan">Pakistan </option>
                                <option value="Palau">Palau </option>
                                <option value="Palestine">Palestine </option>
                                <option value="Panama">Panama </option>
                                <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                                <option value="Paraguay">Paraguay </option>
                                <option value="Pays_Bas">Pays_Bas </option>
                                <option value="Perou">Perou </option>
                                <option value="Philippines">Philippines </option>
                                <option value="Pologne">Pologne </option>
                                <option value="Polynesie">Polynesie </option>
                                <option value="Porto_Rico">Porto_Rico </option>
                                <option value="Portugal">Portugal </option>
                                
                                <option value="Qatar">Qatar </option>
                                
                                <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                                <option value="Republique_Tcheque">Republique_Tcheque </option>
                                <option value="Reunion">Reunion </option>
                                <option value="Roumanie">Roumanie </option>
                                <option value="Royaume_Uni">Royaume_Uni </option>
                                <option value="Russie">Russie </option>
                                <option value="Rwanda">Rwanda </option>
                                
                                <option value="Sahara Occidental">Sahara Occidental </option>
                                <option value="Sainte_Lucie">Sainte_Lucie </option>
                                <option value="Saint_Marin">Saint_Marin </option>
                                <option value="Salomon">Salomon </option>
                                <option value="Salvador">Salvador </option>
                                <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                <option value="Samoa_Americaine">Samoa_Americaine </option>
                                <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                <option value="Senegal">Senegal </option>
                                <option value="Seychelles">Seychelles </option>
                                <option value="Sierra Leone">Sierra Leone </option>
                                <option value="Singapour">Singapour </option>
                                <option value="Slovaquie">Slovaquie </option>
                                <option value="Slovenie">Slovenie</option>
                                <option value="Somalie">Somalie </option>
                                <option value="Soudan">Soudan </option>
                                <option value="Sri_Lanka">Sri_Lanka </option>
                                <option value="Suede">Suede </option>
                                <option value="Suisse">Suisse </option>
                                <option value="Surinam">Surinam </option>
                                <option value="Swaziland">Swaziland </option>
                                <option value="Syrie">Syrie </option>
                                
                                <option value="Tadjikistan">Tadjikistan </option>
                                <option value="Taiwan">Taiwan </option>
                                <option value="Tonga">Tonga </option>
                                <option value="Tanzanie">Tanzanie </option>
                                <option value="Tchad">Tchad </option>
                                <option value="Thailande">Thailande </option>
                                <option value="Tibet">Tibet </option>
                                <option value="Timor_Oriental">Timor_Oriental </option>
                                <option value="Togo">Togo </option>
                                <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                <option value="Tristan da cunha">Tristan de cuncha </option>
                                <option value="Tunisie">Tunisie </option>
                                <option value="Turkmenistan">Turmenistan </option>
                                <option value="Turquie">Turquie </option>
                                
                                <option value="Ukraine">Ukraine </option>
                                <option value="Uruguay">Uruguay </option>
                                
                                <option value="Vanuatu">Vanuatu </option>
                                <option value="Vatican">Vatican </option>
                                <option value="Venezuela">Venezuela </option>
                                <option value="Vierges_Americaines">Vierges_Americaines </option>
                                <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                <option value="Vietnam">Vietnam </option>
                                
                                <option value="Wake">Wake </option>
                                <option value="Wallis et Futuma">Wallis et Futuma </option>
                                
                                <option value="Yemen">Yemen </option>
                                <option value="Yougoslavie">Yougoslavie </option>
                                
                                <option value="Zambie">Zambie </option>
                                <option value="Zimbabwe">Zimbabwe </option>
                                
                        </select>
                    </div>
                                @error('pays') 
                                <div class="invalid-tooltip">{{ $errors->first('pays') }}</div>
                                @enderror
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <input id="my-input" class="form-control p_input rounded-0 @error('ville') is-invalid @enderror" type="text" name="ville" placeholder="Ville">
                        <small class="form-text text-muted">Votre ville de résidence</small>
        
                    </div>
                                @error('ville') 
                                <div class="invalid-tooltip">{{ $errors->first('ville') }}</div>
                                @enderror
                </div>

                <div class="col-12">
                         <h5 class="text-center mx-auto p-3 font-weight-bold">Etude sécondaire</h5>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <input id="my-input" class="form-control p_input rounded-0 @error('ecole') is-invalid @enderror" type="text" name="ecole" placeholder="Ecoles fréquentés">
                        <small class="form-text text-muted">La dernière</small>
        
                    </div>
                                @error('ecole') 
                                <div class="invalid-tooltip">{{ $errors->first('ecole') }}</div>
                                @enderror
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <input id="my-input" class="form-control p_input rounded-0 @error('option') is-invalid @enderror" type="text" name="option" placeholder="Section ou l'option suivie">
                        <small class="form-text text-muted">Entrer l'option et section suivie</small>
        
                    </div>
                                @error('option') 
                                <div class="invalid-tooltip">{{ $errors->first('option') }}</div>
                                @enderror
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <select id="my-select" class="form-control rounded-0" name="diplome">
                            <option selected>Année d'obtention diplôme</option>
                        @for ($i = 1970; $i <= 2018; $i++)
                             <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                        </select>
                    </div>
                                @error('diplome') 
                                <div class="invalid-tooltip">{{ $errors->first('diplome') }}</div>
                                @enderror
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <select id="my-select" class="form-control rounded-0" name="pourcentage">
                            <option selected>Pourcentage</option>
                        @for ($i = 50; $i <= 99; $i++)
                             <option value="{{ $i }}">{{ $i }} %</option>
                        @endfor
                        </select>
                    </div>
                                @error('pourcentage') 
                                <div class="invalid-tooltip">{{ $errors->first('pourcentage') }}</div>
                                @enderror
                </div>
                
                <div class="col-12">
                    <h5 class="text-center mx-auto p-3 font-weight-bold">Choix de votre cursus</h5>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <select id="my-select" class="form-control rounded-0" name="faculte">
                            <option selected>Choix de la Section</option>
                            <option value="1">Architecture</option>
                            <option value="2">Urbanisme</option>
                        </select>
                    </div>
                                @error('faculte') 
                                <div class="invalid-tooltip">{{ $errors->first('faculte') }}</div>
                                @enderror
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <select id="my-select" class="form-control rounded-0" name="promo">
                            <option selected>Promotion</option>
                            <option value="1">Preparatoire</option>
                            <option value="2">G1</option>
                            <option value="3">G2</option>
                            <option value="4">G3</option>
                            <option value="5">L1</option>
                            <option value="6">L2</option>
                        </select>
                    </div>
                                @error('promo') 
                                <div class="invalid-tooltip">{{ $errors->first('promo') }}</div>
                                @enderror
                </div>

                <div class="col-12 mx-auto">
                    <button type="submit" class="py-2 px-4 btne text-center text-uppercase mx-auto d-flex font-weight-bold">Envoyer la demande</button>
                </div>

           </div>
        </div>
    </div>
</form>
@endsection