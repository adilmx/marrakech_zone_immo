
<h1 style="background:#f7810a;"> {{__('Bonjour')}} {{ $data['prenom'] }} {{  $data['nom'] }}</h1>
<h2 "> {{__('Merci Pour Votre Visite')}}</h2>
<h3 "> {{__('Votre Demande a bien été enregestrée')}}</h4>
<br>
<h2 style="background:#f7810a;"> {{__('Informations sur votre demande')}}</h2>
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
</h4>
<h4 style="color:#f7810a;">

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


<p>
    {{__("vous pouvez nous contacter , si vous voulez plus d'information sur votre demande et pour la confirmer veuillez utiliser notre email ou notre numéro tele")}} :
</p>
<h4>
    {{__("email")}} :  {{ $infos[0]->email }}
</h4>
<h4>
    {{__("tele")}} : {{ $infos[0]->tele }}
</h4>
<h4>
    {{__("Whatsapp")}} : {{ $infos[0]->wp_tele }}
</h4>
<h5>
    {{__("Cordialement")}}
</h5>
<h1>
    {{__("Marrakech Zone Immo à votre service")}}
</h1>