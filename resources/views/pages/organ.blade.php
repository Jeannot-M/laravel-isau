@extends('layout.main')

@section('main-css')
<link rel="stylesheet" href="{{ asset('css/master.css') }}">
@endsection

@section('content')
    
        
        <div class="px-5">
           <div class="">
            <h3 class="text-center mx-auto py-4 font-weight-bold text-uppercase" style="font-size: 3rem;">Organisation de <br> l'enseignement</h3>
                        
           </div>

           <div class=" text-justify mx-auto"  style="max-width: 85%; height : auto; line-height: 25px; font-size: 16px;">

           <p >
                
            L’institut Supérieur d’Architecture et d’Urbanisme de Kinshasa « ISAU » en sigle, a été créé par l’ordonnance n°10/071 du 30 octobre 2010. Il est la conséquence de la fusion de deux Institut du Bâtiment et des Travaux Publics (IBTP), à savoir : <br> <br>
            <ol class="px-5">
                <li>Section Architecture</li>
                <li>Section Urbanisme</li>
            </ol>
                          
           </p>
           <div id="accordion" class="myaccordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Undergraduate Studies
                    <span class="fa-stack fa-sm">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                    </span>
                  </button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <ul>
                    <li>Computer Science</li>
                    <li>Economics</li>
                    <li>Sociology</li>
                    <li>Nursing</li>
                    <li>English</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Postgraduate Studies
                    <span class="fa-stack fa-2x">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                    </span>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  <ul>
                    <li>Informatics</li>
                    <li>Mathematics</li>
                    <li>Greek</li>
                    <li>Biostatistics</li>
                    <li>English</li>
                    <li>Nursing</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Research
                    <span class="fa-stack fa-2x">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                    </span>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  <ul>
                    <li>Astrophysics</li>
                    <li>Informatics</li>
                    <li>Criminology</li>
                    <li>Economics</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
           <p  >
            Au terme de l’ordonnance portant sa création, l’institut Supérieur d’Architecture et d’Urbanisme a pour mission de : <br>
            <ul class="mx-auto px-5">
                <li>Former des cadres spécialités dans les domaines des sciences des techniques appliquées ainsi que dans celui des arts et métiers ;</li>
                <li>Organiser la recherche sur l’adaptation des techniques et technologies nouvelles aux conditions du pays ;</li>
                <li>Encourager les talents déclencheurs d’hommes de métiers ;</li>
                <li>Conférer des grades légaux conformément aux dispositions légales et réglementaires sur la collation des grades académiques au sein des Instituts Supérieurs Techniques.
                </li>
            </ul>
            
            
            
            
           <h5 class="font-weight-bold py-3"> 1.	SECTION PREPARATOIRE OU TRONC COMMUN</h5>
            L’admission dans l’une de nos deux fillers à savoir : l’Architecture et l’Urbanisme n’est pas automatique.
            Afin d’y accéder, tout candidat doit nécessairement passer par la voie obligée qui est la section préparatoire qui sert de tronc commun. Un certificat de réussites est délivré à la fin de l’année à l’étudiant ayant satisfait aux épreuves.
            <h5 class="font-weight-bold py-3">2.	SECTION D’ARCHITECTURE</h5>
            A pour objet de former des Architectes, c’est-à-dire des spécialistes de l’art de bâtir. La durée des études est de 5 ans auxquels s’ajoute une année de stage pratique dans un Bureau d’Etudes. La formation des Architectes vise plusieurs objectifs :
            <br><br>

            <ul class="mx-auto px-5">
                <li>Formes des cadres capables de concevoir scientifiquement les espaces (bâtiments) qui abritent les activités de l’homme dans les différents secteurs.</li>
                <li>Former de cadres capables de prendre en charge dans leur conception la dimension du développement durable, des aspects patrimoniaux et culturels de la société.</li>
                <li>Former des cadres capables de proposer des solutions aux problèmes que pose la société en termes de matériaux adaptés aux réalités de l’environnement, de nouvelles techniques de construction adaptées aux réalités locales et de l’utilisation des énergies renouvelables.</li>
                <li>Former des chefs d’Entreprises à même de contribuer à la création d’emplois au sein de la société.</li>
            </ul>
            <br>
            Pour y parvenir, une part importante de l’enseignement est réservée aux travaux en atelier, chaque étudiant étant suivi individuellement par un ou plusieurs encadreurs pour l’aider à bien comprendre le métier et à mieux maitriser les règles qui régissent la profession d’Architecte.
            
            
            
            
            </p>

            <p>
                <h5 class="font-weight-bold py-3">3.	LA SECTION URBANISME</h5>
                En tant que science et Art d’organiser, d’aménager et de gérer de manière rationnelle et harmonieuse les villes et territoires dans lesquels nous vivons, l’Urbanisme est une science politique au sens étymologique du terme. Il propose une organisation réfléchie et responsable de l’espace urbain, met en évidence les choix possibles d’occupation et d’usage de l’espace en fonction du mode de vie des populations et il est étroitement lié à la société, au processus de prise des décisions politiques et l’exercice d’une démocratie participative de l’ensemble des acteurs. <br><br>
                Il étudie les enjeux dans la durée et propose une traduction spatiale des politiques sociales, culturelles, économiques et environnementales. Il met en évidence les choix possible d’occupation de l’espace pour le court, moyen et long terme à toutes les échelles des territoires Urbains.
          </p>

          <p>
            <h5 class="font-weight-bold py-3 text-uppercase">4.	Durée des Etudes</h5>

            <h6 class="font-weight-bold py-3 text-uppercase">4.1.	Premier Cycle :</h6>
            D’une durée de 3 ans, le 1er cycle pour finalité de former des cadres moyens, capable de mener sur le terrain des enquêtes sociales, économiques et démographiques, gérer les demandes d’avis urbanistiques et d’autorisation de bâtir émanant particulièrement des cabinets d’architectes. Il s’agit d’un enseignement focalisé sur la théorique et la pratique.<br><br>

            <ul class="mx-auto px-5">
                <li>La partie théorique se penche sur les notions de doctrine, de règles, de principes et théorie fondamentales d’aménagement et de techniques urbaines.</li>
                <li>Elle permet à l’étudiant d’analyser son milieu, l’observer et proposer son aménagement. Elle aborde également des questions épistémologiques de l’évolution de l’urbanisme et d’aménagement du territoire pour amener l’étudiant à mieux comprendre la vie et le territoire.</li>
                <li>La partie pratique s’exerce en complément des exposés théoriques sous forme de travaux pratiques pendant les séances des cours magistraux, en atelier ou au cours des stages professionnels. Ces stages et travaux pratiques sur terrains donnent à l’étudiant l’occasion d’entrer en contact avec les réalités de son métier ainsi les autres acteurs intervenant dans le domaine.</li>
            </ul>
           
            La fin des études du 1er cycle est couronnée par le diplôme d gradué en Architecture pour la Section Architecture et par celui de gradué en Urbanisme pour la Section Urbanisme.<br><br>

            <h6 class="font-weight-bold py-3 text-uppercase">4.1. Deuxième Cycle</h6>

            Structuré de la même manière que le 1er, avec une composante théorique et des travaux pratiques sur terrain et en atelier, le second cycle accorde une priorité à la maitrise des techniques de programmation, de conception t d’exécution des plans d’aménagement urbain, ainsi que des problèmes de l’environnement, dès la rénovation des quartiers et des règles de bonne gouvernance administrative.<br><br>

            La fin des études du 2nd cycle est couronné par le diplôme d’Architecte pour la Section Architecture et de celui d’Urbaniste pour la section Urbanisme.
            
          </p>

        </div>
        </div>

@endsection