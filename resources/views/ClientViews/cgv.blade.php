<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="csrf-token" value="{{ csrf_token() }}" />	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.typekit.net/efm0wqg.css">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
	
	<link href="{{ asset('assets/plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />
	<link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />

	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

	<title>{{ __('Cgv') }} - Iqrae</title>
</head>

<body> 	
	<!--wrapper-->
	<div class="wrapper">
		<!-- page entete -->
		
        @include('ClientViews.header')

        <!-- page entete -->
        <div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom d-none d-md-flex">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">{{ __('Cgv') }}</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
										<li class="breadcrumb-item"><a href="{{ asset('')}}"><i class="bx bx-home-alt"></i> {{ __('nav1') }}</a>
										</li>
										<li class="breadcrumb-item">{{ __('Cgv') }}</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start page content-->
				<section class="py-4 py-lg-4 cgv">
					<div class="container" style="color: #212529">
					<div class="entry-content">
			        <h2>Objet</h2>
					<p>Les présentes conditions générales de vente ont pour objet de définir les droits et	obligations des parties dans le cadre de la vente des produits de la société LIBIQRAE.MA sur Internet, par l’intermédiaire de la plate-forme.<br>
					Le fait de cocher la case «J'accepte les Conditions Générales de Vente» signifie à la fois que vous achetez le ou les biens présentés et également que vous acceptez les <b>présentes Conditions Générales de Vente.</b> (ci-après, le «Site»).</p>
					<p><b>Il est demandé à l’acheteur de lire attentivement ces conditions avant de commander:</b></p>
					<h2>Produits</h2>
					<p>Les produits proposés à la vente par LIBIQRAE.MA sont ceux figurant sur le site au jour
de la consultation du site par l'utilisateur.
Nos articles sont proposés dans la limite des stocks disponibles et pour ceux non stockés
par nos soins, dans la limite de leur disponibilité auprès des fournisseurs de
LIBIQRAE.MA
Bien que nos bases de données soient régulièrement mises à jour, certains articles
peuvent être provisoirement ou définitivement indisponibles chez nos fournisseurs. Si
un produit n'est plus en stock, LIBIQRAE.MA s'engage à informer le consommateur au
plus vite.
IQRAE.COULD fait connaître à l'Utilisateur et au Consommateur l'ensemble des
caractéristiques essentielles des produits proposés : tailles, couleurs, compositions,
descriptifs, prix, cela dans la plus grande exactitude possible. Toutefois, si des erreurs ou
omissions ont pu se produire quant à cette présentation, la responsabilité de
LIBIQRAE.MA ne pourrait être engagée.
Les produits demeurent la propriété de LIBIQRAE.MA jusqu'au complet encaissement

du prix par LIBIQRAE.MA.</p>
					<h2>Prix</h2>
					<p>sont indiqués en dirhams. Les prix indiqués tiennent compte d'éventuelles réductions
ainsi que de la T.V.A (Taxe sur la Valeur Ajoutée), applicables au jour de la commande.
LIBIQRAE.MA se réserve le droit de modifier ses prix à tout moment. Les produits
seront facturés sur la base des tarifs en vigueur au moment de l'enregistrement de la
commande, sous réserve néanmoins de la disponibilité des produits.</p>
					<h2>Commande</h2>
					<p>Lors de sa commande, le Consommateur accepte de fournir les informations requises
(nom, adresse, téléphone, adresse e-mail, etc.).
Dès que le Consommateur a validé sa commande, il est considéré comme ayant accepté
en connaissance de cause et sans réserve les prix, volumes et quantités proposés.
LIBIQRAE.MA confirmera au Consommateur l'acceptation de sa commande par l'envoi
d'un message de confirmation à l'adresse e-mail que ce dernier aura communiqué. La
vente ne sera conclue qu'à compter de l'envoi de ladite confirmation de commande.

LIBIQRAE.MA se réserve le droit de refuser ou d'annuler toute commande d'un
consommateur notamment en cas d'insolvabilité dudit consommateur ou dans
l'hypothèse d'un défaut de paiement de la commande concernée ou d'une livraison
antérieure ou d'un litige relatif au paiement d'une commande antérieure. LIBIQRAE.MA
se réserve le droit, dans le cadre des procédures de traitement sécurisé des
commandes, de refuser la confirmation d'une commande qui ne répondrait pas à ses
critères de sécurité.
Les mentions indiquées par l’Utilisateur et/ou le Consommateur, lors de la saisie des
informations inhérentes à sa commande engagent celui-ci. LIBIQRAE.MA ne saurait être
tenu responsable des erreurs commises par l’Utilisateur et le Consommateur dans le
libellé des coordonnées du destinataire de la commande (adresse de livraison, adresse
de facturation notamment) et des retards de livraison ou de l'impossibilité de livrer les
produits commandés que ces erreurs pourraient engendrer.</p>
					<h2>Preuve des transactions</h2>
					<p>Les informations enregistrées telles que des communications, bons de commandes ou
factures, sont archivées et conservées dans les systèmes informatiques de
LIBIQRAE.MA ou de ses partenaires, et peuvent être produits à titre de preuve de
l’ensemble des transactions commerciales passées entre le Consommateur et la société
LIBIQRAE.MA</p>
					<h2>Force majeure</h2>
					<p>LIBIQRAE.MA ne saurait être tenu pour responsable de l'inexécution du contrat conclu
due à la survenance d'un événement de force majeure.
En ce qui concerne les produits achetés pour satisfaire les besoins professionnels,
LIBIQRAE.MA n'encourra aucune responsabilité pour tous dommages indirects du fait
des présentes, perte d'exploitation, perte de profit, dommages ou frais, qui pourraient
survenir.</p>
					<h2>Défaut de conformité de la marchandise</h2>
					<p>Il est recommandé de vérifier le bon état du produit au moment de la livraison. Cette
vérification doit porter sur la qualité, les quantités et les références des marchandises
ainsi que leur conformité à la commande. Aucune réclamation ne sera prise en compte
après un délai de sept jours à compter du jour de la livraison. La marchandise
comportant un défaut de conformité reconnu, signalé dans le délai sus indiqué, fait
l'objet d'un remplacement ou d'une remise en l'état, à l'exclusion de tout
dédommagement, à quelque titre que ce soit.</p>
					<h2>Expédition &amp; livraison</h2>
					<p>LIBIQRAE.MA assure la livraison de toute commande client à l´adresse indiquée dans le
bon de commande.

Délais de livraison
Sauf cas de force majeur, LIBIQRAE.MA est amenée à exécuter toute commande client
validée dans un délai maximum de 2 jours à compter du lendemain du jour où le client
exécute sa commande, sous réserve de stock disponible. Pour toute commande passée
le vendredi, le colis est expédié le lundi.

Délai d’expédition des colis
Le délai d´expédition est généralement de 2 jours à compter du lendemain du jour
d´exécution de la commande, sous réserve de stock disponible et après validation du
règlement.
Les délais de livraison sont donnés à titre indicatif. Ces délais tiennent compte du délai
de transport qui varie en fonction de la destination et du mode de transport utilisé.
En cas de retard de livraison ou de rupture de stock imprévisible chez nos fournisseurs,
la responsabilité du site ne peut être engagée.
Le client ne peut se prévaloir du dépassement du délai de livraison donné à titre
indicatif pour demander l’annulation de la commande ou des dommages-intérêts.
Modes d´expédition
LIBIQRAE.MA peut mandater différents prestataires pour effectuer les livraisons, dont
le Service livraison à domicile à Meknès, par CTM aussi par SDTM
Tous les colis sont expédiés à l´adresse indiquée dans le bon de commande client.
LIBIQRAE.MA procède à la livraison du lundi au dimanche.
</p>
					<h2>Rétractation</h2>
					<p>Le Consommateur bénéficie d'un délai de rétractation de 7 jours à compter de la
réception de sa commande pour retourner le(s) produit(s) pour remboursement sans
pénalité.
Un e-mail sera envoyé au Consommateur pour l’informer des différentes étapes de la
procédure de retour (en attente du colis, colis reçu, retour refusé, retour accepté).
Le remboursement selon le mode de paiement choisi par le Consommateur lors de la
commande sera envoyé dans un délai de 15 jours.
Les frais d’envoi et de retour sont à la charge du client. Seuls les articles retournés dans
leur emballage d'origine seront acceptés.
Attention, les livres scolaires sont en commande ferme. Il nous est impossible de les
échanger ou de les rembourser, sauf erreur de notre part.
En cas de retours abusifs, la société LIBIQRAE.MA se réserve le droit de refuser une
commande ultérieure.</p>
					<h2>Réserve de propriété</h2>
					<p>LIBIQRAE.MA conserve la propriété pleine et entière des produits vendus jusqu'au
paiement intégral, taxes comprises.</p>
					<h2>Coordonnées de la société</h2>
					<p>
					www.LIBIQRAE.MA
					<br>Nos locaux commerciaux : 21.DB ELBAKRI.ELMELLAH MEKNES MAROC
					<br>dépôts Sidi bouzakri
					<br>Numéro de commerçant : 0659-80-87-23
					<br>Email : ayoub.iqrae@gmail.com
					<br>Mise à jour des conditions générales de vente</p>
				</div>
					</div>
				</section>
			<!--end start page content-->
			</div>
		</div>

		<!--end page wrapper -->
		<!--start footer section-->
		@include('ClientViews.footer')
		<!--end footer section-->
	
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
        
        <div class="switcher-btn" style="background: none; box-shadow:none"> 
            <a href="https://api.whatsapp.com/send?phone=212659808723">
				<lottie-player id="valid" src="{{ asset('')}}whatsapp-40.json"  background="transparent"  speed="1"  style="width: 90px; height: 90px; margin: auto;"  loop autoplay></lottie-player>
            </a>
        </div>
        
    </div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
    
</body>

</html>
