<html>

<head>
    <title>Demande</title>
    <style>
        body {
            
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }




        .container{
          padding: 0 30px ;
        }

        strong{
          font-size: 15px;
        }
        div{
          padding: 8px;
        }
      

        .date {
            text-align: center;
        }

        .date_ {
            text-align: right;
        }

    </style>
</head>

<body>
        <div class="container">
           

        <div class="date">
            <img class="" src="assets\images\LOGO\logo.png" width="10%" alt="">
            <h5>Fondation Oriental Figug</h5>
        </div>
        <br>
        <br>
        <br>
        <div class="date_">
            <h4>
                Date : {{ Date('d/m/yy') }}
            </h4>
        </div>

        <div class="date">
            <h2>Demande N° : 0000{{ $Demande->id }}</h2>
        </div>

        <h3>Information personelle :</h3>
        <div class="container">
            <div> <strong>Nom :</strong> {{ $Demande->nom }}</div>
            <div> <strong>Prénom :</strong> {{ $Demande->prenom }}</div>
            <div> <strong>Cin :</strong> {{ $Demande->cin }}</div>
            <div><strong>N° de carte RAMED :</strong> {{ $Demande->nbrRamed }}</div>
            <div><strong>Genre d'aide demandé :</strong> {{ $Demande->genreDemande }}</div>
            <div><strong>Montant demandé :</strong> {{ $Demande->montant }} MAD</div>
        </div>
        <h3>Information pour le contact :</h3>
        <div class="container">
            <div><strong>Adresse :</strong> {{ $Demande->adresse }}</div>
            <div><strong>Téléphone :</strong> {{ $Demande->Tel }}</div>
            <div><strong>Email :</strong> {{ $Demande->email }}</div>
        </div>


    </div>

</body>

</html>
