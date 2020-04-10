@extends('layout.main')

@section('main-css')
<link rel="stylesheet" href="{{ asset('css/master.css') }}">
@endsection

@section('content')
    
        
        <div class="px-5">
           <div class="">
            <h5 class="text-center mx-auto py-4 font-weight-bold display-4">Comprendre <br> l'histoire de l'ISAU</h5>
                        
           </div>
           <p class=" text-justify mx-auto" style="max-width: 85%; height : auto; line-height: 25px; font-size: 16px;">
                En 1943, sous la direction du Révérend frère Marc STANISLAS WALLENDA, la congrégation des frères des écoles chretiennes crée une école artistique saint Luc à Gombe-Matadi a dans le Bas-Congo pour y faire dispenser l'enseignement des techniques sculpurales. <br><br>
                
                <img src="{{ asset('images/cloture.jpg') }}" class="img-fluid float-right ml-3"  style=" width:28%; height: 15%; margin: auto 0;" alt="" srcset="">
                En 1949, l'école est transfère à Leopoldville. En  1950, une nouvelle orientation s'ajoute en l'occurence, la Peinture et en 1953, la céramique. En 1957, l'école saint Luc est débaptisée pour devenir Académie des Beaux-Arts et sera enrichie en 1958 d'une nouvelle orientation, à savoir : dessinateurs en Architecture. 
                <br><br>
                Il est à noter qu'à cette époque, l'enseignement était organisé en deux cycles : le cycle moyen de quatreans et le cycle superieur de trois ans. C'est en 1961 que ce cycle de 7 ans sera remplacé par les humanités artistiques d'une durée de 6 ans.
              

                
                En 1962, pendant que les orientations sculpture, peinture et céramique continueront à fonctionner comme humanités artistiques, la section des dessinateurs d'Architecture va déboucher sur la création d'un Institut Supérieur d'Architecture (ISA) formant des architectes dans un cycle de 5 ans.
                <br><br>

                Au cours de cette période les étudiants étaient appelé à développer un sens esthétique élevé auquel s'ajoutait une formation scientifique rigoureuse et une année de stage à l'étranger. Il faut aussi souligner en passant que les premiers Architectes congolais, qui étaient au nombre de 3, ont été diplomés en 1970, Edition 1969 - 1970.
                <br><br>

                En 1967: création de l'Institut Supérieur des Arts plastiques (ISAP). En 1971 : l'ISAP et l'ISA vont etre intégrés à l'Institut du Batiment et des travaux Publics (IBTP) grace à la réforme de l'enseignement supérieur et Universitaire intervenue à la création de l'UNAZa. L'Institut Supérieur d'Architecture (ISA) va donc rester attaché à l'IBTP pour devenir l'une de ses quatre sections jusqu'à la création de l'Institut Supérieur d'Architecture et d'Urbanisme de Kinshasa en 2010.



            </p>
        </div>

@endsection