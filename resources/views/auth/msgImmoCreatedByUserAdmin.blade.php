
<h1 style="background:#f7810a;"> {{__('Bonjour')}} admin </h1>
<h2 > {{__('Une nouvelle demade decreation de bien a été faite par ')}} {{ $data['prenom'] }} {{  $data['nom'] }}</h2>
<br>
<h2 style="background:#f7810a;"> {{__('Informations sur ce client')}}</h2>
<h4 style="color:#f7810a;">
    {{__("nom")}} : <span>{{  $data['nom'] }}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("Prenom")}} : <span>{{ $data['prenom'] }}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("tele")}} :" <span>{{ $data['tele'] }}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("email")}} :" <span>{{ $data['email'] }}</span>
</h4>
<h2 style="background:#f7810a;"> {{__('Informations sur ce bien')}}</h2>
<h4 style="color:#f7810a;">
    {{__("libellée de l'immobilier(Vente)")}} :" <span>{{$pro[0]->designation}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("Type de l'immobilier")}} :" <span>{{$pro[0]->lib}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("date creation")}} :" <span>{{$pro[0]->immo_created_at}}</span>
</h4>

<h4 style="color:#f7810a;">
    {{__("Prix de vente")}} :" <span>{{$data["prix_max"]}}$</span>
</h4><h4 style="color:#f7810a;">

    {{__("PATENTE")}} :" <span>{{$data["patente"]}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("Superficie")}} :" <span>{{$data["superficie"]}}</span>
</h4>
@if($data["type"] != 2)
<h4 style="color:#f7810a;">
    {{__("Superficie piscine")}} :" <span>{{$data["superficie_psc"]}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("nombre d'étages")}} :" <span>{{$data["nbr_etage"]}}</span>
</h4>
<h4 style="color:#f7810a;">
    {{__("nombre de chambres")}} :" <span>{{$data["nbr_chbr"]}}</span>
</h4>
@endif

<h3>{{__("Pour plus d'informations et pour lui confirmer cette demande, veuillez visitez la page admin de site web")}}</h3>


<h5>
    {{__("Cordialement")}}
</h5>
<h1>
    {{__("Par")}} : Marrakech Zone Immo
</h1>