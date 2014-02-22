<?php
	header("Content-type: text/html; charset=UTF-8");
	include("inc/config.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
	<?php include("inc/head.php"); ?>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=516115495070345";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div class="container-tudo">
			<div class="container">
				<div class="topo"></div>
				<div class="middle">
					<div class="middle-left"></div>
					<div class="middle-right">
						<div class="middle-right-top"></div>
						<div class="middle-right-conteudo">
							<div class="middle-right-circle"></div>
							<div class="middle-right-links">
								<a href="" rel="como_funciona" title="COMO FUNCIONA?">COMO FUNCIONA?</a>
								<a href="documents/regulamento.pdf" rel="regulamento" title="REGULAMETO" target="_blank">REGULAMENTO</a>
								<a href="ficha.php" rel="ficha" class="abrePop" title="FICHA DE INSCRIÇÃO">FICHA DE INSCRIÇÃO</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="tx-copyright">&copy Copyright 1999-2014 Universidade Norte do Paraná - Todos os direitos reservados</div>
			<div class="logo_unopar">
				<a href="" title="UNOPAR">
					<span>Unopar</span>
				</a>
			</div>
		</div>
		<div class="contentHowToWork">
			<div class="bt_fechar"></div>
			<div class="imgHowToWork">
				<img src="img/img_how_work.png" />
				<div class="videoHowToWork">
					<iframe width="640" height="360" src="//www.youtube.com/embed/pu2UY2xLuuI" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<!-- FICHA DE INSCRICAO -->
		<div class="overlayFicha"></div>
		<div class="contentFicha">
			<div class="bt_fechar"></div>
			<form id="fichaInscricao" class="formFicha" name="formFicha">
				<div class="overflow-loader cont-loader"></div>
				<div class="img-loader cont-loader"></div>
				<div class="cont-msg-success">
					<div class="tutor_confirm"></div>
					<div class="msg_confirm"></div>
					<div class="msg_confirm_compartilha">
						<div class="bt_compartilhar">
							<!--<a href="#" class="shareFace">Compartilhar</a>-->
							<div class="fb-share-button" data-href="http://tutor.unoparead.com.br/" data-width="626" data-type="button"></div>
						</div>
					</div>
					<div class="img_academico_confirm"></div>
				</div>
				<ul>
					<li>
						<label for="nome">Nome Completo*:</label>
						<div>
							<input type="text" id="nome" name="nome" value="" class="size5" />
						</div>
					</li>
					<li>
						<label for="cpf">CPF*:</label>
						<div>
							<input type="text" id="cpf" name="cpf" value="" class="size2" />
						</div>
					</li>
					<li class="both">
						<label for="polo">Polo*:</label>
						<div>
							<select id="polo" name="polo" class="polo size2">
								<option value="">Selecione um polo</option>
								<option value="AGUA BOA - MT">AGUA BOA - MT</option>
								<option value="ALAGOINHAS - BA">ALAGOINHAS - BA</option>
								<option value="ALEGRETE - RS">ALEGRETE - RS</option>
								<option value="ALÉM PARAÍBA - MG">ALÉM PARAÍBA - MG</option>
								<option value="ALEXÂNIA - GO">ALEXÂNIA - GO</option>
								<option value="ALFENAS - MG">ALFENAS - MG</option>
								<option value="ALMENARA - MG">ALMENARA - MG</option>
								<option value="ALTA FLORESTA - MT">ALTA FLORESTA - MT</option>
								<option value="ALTO ARAGUAIA - MT">ALTO ARAGUAIA - MT</option>
								<option value="AMAMBAI - MS">AMAMBAI - MS</option>
								<option value="ANÁPOLIS - I - GO">ANÁPOLIS - I - GO</option>
								<option value="ANÁPOLIS - II - GO">ANÁPOLIS - II - GO</option>
								<option value="ANDRADAS - MG">ANDRADAS - MG</option>
								<option value="APIAÍ - SP">APIAÍ - SP</option>
								<option value="AQUIDAUANA - MS">AQUIDAUANA - MS</option>
								<option value="ARACAJU - II - IDECO - SE">ARACAJU - II - IDECO - SE</option>
								<option value="ARAÇATUBA - SP">ARAÇATUBA - SP</option>
								<option value="ARAÇUAÍ - MG">ARAÇUAÍ - MG</option>
								<option value="ARAGUAÍNA - II - TO">ARAGUAÍNA - II - TO</option>
								<option value="ARAPIRACA - AL">ARAPIRACA - AL</option>
								<option value="ARAPONGAS - PR">ARAPONGAS - PR</option>
								<option value="ARARANGUÁ - SC">ARARANGUÁ - SC</option>
								<option value="ARARIPINA - PE">ARARIPINA - PE</option>
								<option value="ARAXÁ - MG">ARAXÁ - MG</option>
								<option value="ARCOVERDE - PE">ARCOVERDE - PE</option>
								<option value="ARIQUEMES - RO">ARIQUEMES - RO</option>
								<option value="ASSAÍ - PR">ASSAÍ - PR</option>
								<option value="ASSIS - I - SP">ASSIS - I - SP</option>
								<option value="AVARÉ - SP">AVARÉ - SP</option>
								<option value="BAIXA GRANDE - BA">BAIXA GRANDE - BA</option>
								<option value="BANDEIRANTES - UNOPAR - PR">BANDEIRANTES - UNOPAR - PR</option>
								<option value="BARBALHA - CE">BARBALHA - CE</option>
								<option value="BARCARENA - PA">BARCARENA - PA</option>
								<option value="BARRA - BA">BARRA - BA</option>
								<option value="BARRA DE SÃO FRANCISCO - ES">BARRA DE SÃO FRANCISCO - ES</option>
								<option value="BARRA DO GARÇAS - MT">BARRA DO GARÇAS - MT</option>
								<option value="BARRA DO MENDES - BA">BARRA DO MENDES - BA</option>
								<option value="BARREIRAS - I - BA">BARREIRAS - I - BA</option>
								<option value="BEBEDOURO - SP">BEBEDOURO - SP</option>
								<option value="BELÉM - I - FAMAC - PA">BELÉM - I - FAMAC - PA</option>
								<option value="BELO HORIZONTE - I - PAMPULHA - MG">BELO HORIZONTE - I - PAMPULHA - MG</option>
								<option value="BELO HORIZONTE - II - CENTRO - MG">BELO HORIZONTE - II - CENTRO - MG</option>
								<option value="BETIM - I - RUA OSVALDO FRANCO - MG">BETIM - I - RUA OSVALDO FRANCO - MG</option>
								<option value="BETIM - II - AVENIDA AMAZONAS - MG">BETIM - II - AVENIDA AMAZONAS - MG</option>
								<option value="BOA VISTA - RR">BOA VISTA - RR</option>
								<option value="BOCAIÚVA - MG">BOCAIÚVA - MG</option>
								<option value="BOM JESUS - PI">BOM JESUS - PI</option>
								<option value="BOM JESUS DA LAPA - BA">BOM JESUS DA LAPA - BA</option>
								<option value="BOQUIRA - BA">BOQUIRA - BA</option>
								<option value="BOTUCATU - SP">BOTUCATU - SP</option>
								<option value="BRASILÉIA - AC">BRASILÉIA - AC</option>
								<option value="BRASÍLIA - DF">BRASÍLIA - DF</option>
								<option value="BRASÍLIA DE MINAS - MG">BRASÍLIA DE MINAS - MG</option>
								<option value="BREVES - PA">BREVES - PA</option>
								<option value="BRUMADO - BA">BRUMADO - BA</option>
								<option value="BUTIÁ - RS">BUTIÁ - RS</option>
								<option value="CABO DE SANTO AGOSTINHO - PE">CABO DE SANTO AGOSTINHO - PE</option>
								<option value="CABO FRIO - RJ">CABO FRIO - RJ</option>
								<option value="CAÇADOR - SC">CAÇADOR - SC</option>
								<option value="CACEQUI - RS">CACEQUI - RS</option>
								<option value="CÁCERES - MT">CÁCERES - MT</option>
								<option value="CACHOEIRO DE ITAPEMIRIM - ES">CACHOEIRO DE ITAPEMIRIM - ES</option>
								<option value="CACOAL - RO">CACOAL - RO</option>
								<option value="CAIAPÔNIA - GO">CAIAPÔNIA - GO</option>
								<option value="CAICÓ - RN">CAICÓ - RN</option>
								<option value="CALDAS NOVAS - GO">CALDAS NOVAS - GO</option>
								<option value="CAMAQUÃ - RS">CAMAQUÃ - RS</option>
								<option value="CAMPINA GRANDE - PB">CAMPINA GRANDE - PB</option>
								<option value="CAMPINAS II - SP">CAMPINAS II - SP</option>
								<option value="CAMPO FORMOSO - BA">CAMPO FORMOSO - BA</option>
								<option value="CAMPO GRANDE I - CENTRO - MS">CAMPO GRANDE I - CENTRO - MS</option>
								<option value="CAMPO MAIOR - PI">CAMPO MAIOR - PI</option>
								<option value="CAMPO MOURÃO - PR">CAMPO MOURÃO - PR</option>
								<option value="CAMPO NOVO DO PARECIS - MT">CAMPO NOVO DO PARECIS - MT</option>
								<option value="CAMPOS DOS GOYTACAZES - RJ">CAMPOS DOS GOYTACAZES - RJ</option>
								<option value="CAMPOS NOVOS - SC">CAMPOS NOVOS - SC</option>
								<option value="CANARANA - MT">CANARANA - MT</option>
								<option value="CANGUÇU - RS">CANGUÇU - RS</option>
								<option value="CANOAS - RS">CANOAS - RS</option>
								<option value="CAPANEMA - PA">CAPANEMA - PA</option>
								<option value="CARAZINHO - RS">CARAZINHO - RS</option>
								<option value="CARLOS CHAGAS - MG">CARLOS CHAGAS - MG</option>
								<option value="CARPINA - PE">CARPINA - PE</option>
								<option value="CARUARU - PE">CARUARU - PE</option>
								<option value="CASCAVEL - PR">CASCAVEL - PR</option>
								<option value="CASTANHAL - FAMAC - PA">CASTANHAL - FAMAC - PA</option>
								<option value="CATAGUASES - MG">CATAGUASES - MG</option>
								<option value="CATANDUVA - SP">CATANDUVA - SP</option>
								<option value="CAXIAS DO SUL - RS">CAXIAS DO SUL - RS</option>
								<option value="CEILÂNDIA - DF">CEILÂNDIA - DF</option>
								<option value="CEREJEIRAS - RO">CEREJEIRAS - RO</option>
								<option value="CHAPADÃO DO SUL - MS">CHAPADÃO DO SUL - MS</option>
								<option value="CHAPECÓ - SC">CHAPECÓ - SC</option>
								<option value="CIDADE OCIDENTAL - GO">CIDADE OCIDENTAL - GO</option>
								<option value="COARI - AM">COARI - AM</option>
								<option value="COCOS - BA">COCOS - BA</option>
								<option value="COLATINA - ES">COLATINA - ES</option>
								<option value="COLÍDER - MT">COLÍDER - MT</option>
								<option value="COLINAS DO TOCANTINS - TO">COLINAS DO TOCANTINS - TO</option>
								<option value="CONCEIÇÃO DO ARAGUAIA - PA">CONCEIÇÃO DO ARAGUAIA - PA</option>
								<option value="CONCÓRDIA - SC">CONCÓRDIA - SC</option>
								<option value="CONTAGEM I - MG">CONTAGEM I - MG</option>
								<option value="CORNÉLIO PROCÓPIO I - PR">CORNÉLIO PROCÓPIO I - PR</option>
								<option value="CORNÉLIO PROCÓPIO II - PR">CORNÉLIO PROCÓPIO II - PR</option>
								<option value="CORUMBÁ - MS">CORUMBÁ - MS</option>
								<option value="COXIM - MS">COXIM - MS</option>
								<option value="CRATEÚS - CE">CRATEÚS - CE</option>
								<option value="CRISSIUMAL - RS">CRISSIUMAL - RS</option>
								<option value="CRUZ ALTA - RS">CRUZ ALTA - RS</option>
								<option value="CRUZ DAS ALMAS - BA">CRUZ DAS ALMAS - BA</option>
								<option value="CRUZEIRO DO SUL - AC">CRUZEIRO DO SUL - AC</option>
								<option value="CUBATÃO - SP">CUBATÃO - SP</option>
								<option value="CUIABÁ I - PROX. SHOPPING TRÊS AMÉRICAS - UNISAT - MT">CUIABÁ I - PROX. SHOPPING TRÊS AMÉRICAS - UNISAT - MT</option>
								<option value="CUIABÁ III - COXIPÓ - FATO CURSOS - MT">CUIABÁ III - COXIPÓ - FATO CURSOS - MT</option>
								<option value="CURITIBA - I - CENTRO - PR">CURITIBA - I - CENTRO - PR</option>
								<option value="CURITIBA - II - REPÚBLICA ARGENTINA - PR">CURITIBA - II - REPÚBLICA ARGENTINA - PR</option>
								<option value="CURVELO - MG">CURVELO - MG</option>
								<option value="DIADEMA - SP">DIADEMA - SP</option>
								<option value="DIAMANTINA - MG">DIAMANTINA - MG</option>
								<option value="DIANÓPOLIS - TO">DIANÓPOLIS - TO</option>
								<option value="DIVINÓPOLIS I - MG">DIVINÓPOLIS I - MG</option>
								<option value="DOURADOS - MS">DOURADOS - MS</option>
								<option value="DRACENA - SP">DRACENA - SP</option>
								<option value="DUQUE DE CAXIAS - II - CENTRO (JARDIM 25 DE AGOSTO) - RJ">DUQUE DE CAXIAS - II - CENTRO (JARDIM 25 DE AGOSTO) - RJ</option>
								<option value="ENCRUZILHADA - BA">ENCRUZILHADA - BA</option>
								<option value="ERECHIM - RS">ERECHIM - RS</option>
								<option value="ESPERANTINA - PI">ESPERANTINA - PI</option>
								<option value="ESPINOSA - MG">ESPINOSA - MG</option>
								<option value="ESPLANADA - BA">ESPLANADA - BA</option>
								<option value="EUCLIDES DA CUNHA - BA">EUCLIDES DA CUNHA - BA</option>
								<option value="EUNÁPOLIS - BA">EUNÁPOLIS - BA</option>
								<option value="FEIJÓ - AC">FEIJÓ - AC</option>
								<option value="FEIRA DE SANTANA - I - BA">FEIRA DE SANTANA - I - BA</option>
								<option value="FLORIANÓPOLIS -  INST. SOCIAL JOÃO PAULO II - SC">FLORIANÓPOLIS -  INST. SOCIAL JOÃO PAULO II - SC</option>
								<option value="FORMOSA - GO">FORMOSA - GO</option>
								<option value="FORMOSA DO RIO PRETO - BA">FORMOSA DO RIO PRETO - BA</option>
								<option value="FORTALEZA - I - COLÉGIO DARWIN - CE">FORTALEZA - I - COLÉGIO DARWIN - CE</option>
								<option value="FOZ DO IGUAÇÚ - II - PR">FOZ DO IGUAÇÚ - II - PR</option>
								<option value="FRAIBURGO - SC">FRAIBURGO - SC</option>
								<option value="FRANCISCO BELTRÃO - I - PR">FRANCISCO BELTRÃO - I - PR</option>
								<option value="FRANCISCO BELTRÃO - II - PR">FRANCISCO BELTRÃO - II - PR</option>
								<option value="FREDERICO WESTPHALEN - RS">FREDERICO WESTPHALEN - RS</option>
								<option value="GAMA - DF">GAMA - DF</option>
								<option value="GARANHUNS - PE">GARANHUNS - PE</option>
								<option value="GOIANÉSIA - GO">GOIANÉSIA - GO</option>
								<option value="GOIÂNIA - I - COLÉGIO META - GO">GOIÂNIA - I - COLÉGIO META - GO</option>
								<option value="GOIÂNIA - II - COLÉGIO FLAMBOYANT - GO">GOIÂNIA - II - COLÉGIO FLAMBOYANT - GO</option>
								<option value="GOIÂNIA - III - COLÉGIO DESAFIO - GO">GOIÂNIA - III - COLÉGIO DESAFIO - GO</option>
								<option value="GOVERNADOR VALADARES I - CENTRO - MG">GOVERNADOR VALADARES I - CENTRO - MG</option>
								<option value="GRAMADO - RS">GRAMADO - RS</option>
								<option value="GRAVATÁ - PE">GRAVATÁ - PE</option>
								<option value="GUAÍBA - RS">GUAÍBA - RS</option>
								<option value="GUANAMBÍ - BA">GUANAMBÍ - BA</option>
								<option value="GUARABIRA - PB">GUARABIRA - PB</option>
								<option value="GUARANTÃ DO NORTE - MT">GUARANTÃ DO NORTE - MT</option>
								<option value="GUARAPUAVA - PR">GUARAPUAVA - PR</option>
								<option value="GUARULHOS - SP">GUARULHOS - SP</option>
								<option value="GURUPI - TO">GURUPI - TO</option>
								<option value="IBAITI - PR">IBAITI - PR</option>
								<option value="IBIRITÉ - MG">IBIRITÉ - MG</option>
								<option value="IBIRUBÁ - RS">IBIRUBÁ - RS</option>
								<option value="IBOTIRAMA - BA">IBOTIRAMA - BA</option>
								<option value="IJUÍ - RS">IJUÍ - RS</option>
								<option value="ILHÉUS - BA">ILHÉUS - BA</option>
								<option value="IPATINGA I - FADIPA - MG">IPATINGA I - FADIPA - MG</option>
								<option value="IPIRÁ - BA">IPIRÁ - BA</option>
								<option value="IPORÁ - GO">IPORÁ - GO</option>
								<option value="IRECÊ - BA">IRECÊ - BA</option>
								<option value="ITABERABA - BA">ITABERABA - BA</option>
								<option value="ITABIRA - MG">ITABIRA - MG</option>
								<option value="ITABIRITO - MG">ITABIRITO - MG</option>
								<option value="ITABUNA - I - BA">ITABUNA - I - BA</option>
								<option value="ITACOATIARA - AM">ITACOATIARA - AM</option>
								<option value="ITAITUBA - PA">ITAITUBA - PA</option>
								<option value="ITAJAÍ - SC">ITAJAÍ - SC</option>
								<option value="ITAJUBÁ - I - COL. ANGLO - MG">ITAJUBÁ - I - COL. ANGLO - MG</option>
								<option value="ITAMARAJU - BA">ITAMARAJU - BA</option>
								<option value="ITAPERUNA - I - CENTRO - RJ">ITAPERUNA - I - CENTRO - RJ</option>
								<option value="ITAPETINGA - BA">ITAPETINGA - BA</option>
								<option value="ITAPETININGA - SP">ITAPETININGA - SP</option>
								<option value="ITAPEVA - SP">ITAPEVA - SP</option>
								<option value="ITAPURANGA - GO">ITAPURANGA - GO</option>
								<option value="ITÚ - SP">ITÚ - SP</option>
								<option value="ITUIUTABA - MG">ITUIUTABA - MG</option>
								<option value="ITUMBIARA - I - GO">ITUMBIARA - I - GO</option>
								<option value="IVAIPORÃ - PR">IVAIPORÃ - PR</option>
								<option value="JACARACI - BA">JACARACI - BA</option>
								<option value="JACAREI - SP">JACAREI - SP</option>
								<option value="JACOBINA - BA">JACOBINA - BA</option>
								<option value="JAÍBA - MG">JAÍBA - MG</option>
								<option value="JANAÚBA - MG">JANAÚBA - MG</option>
								<option value="JANUÁRIA - MG">JANUÁRIA - MG</option>
								<option value="JARU - RO">JARU - RO</option>
								<option value="JATAÍ - GO">JATAÍ - GO</option>
								<option value="JAÚ - SP">JAÚ - SP</option>
								<option value="JEQUIÉ - BA">JEQUIÉ - BA</option>
								<option value="JI-PARANÁ - RO">JI-PARANÁ - RO</option>
								<option value="JOÃO CÂMARA - RN">JOÃO CÂMARA - RN</option>
								<option value="JOÃO DOURADO - BA">JOÃO DOURADO - BA</option>
								<option value="JOÃO MONLEVADE - MG">JOÃO MONLEVADE - MG</option>
								<option value="JOÃO PESSOA II - COL. DECISÃO - PB">JOÃO PESSOA II - COL. DECISÃO - PB</option>
								<option value="JOÃO PESSOA III - TAMBAUZINHO - PB">JOÃO PESSOA III - TAMBAUZINHO - PB</option>
								<option value="JOINVILLE - SC">JOINVILLE - SC</option>
								<option value="JUAZEIRO - BA">JUAZEIRO - BA</option>
								<option value="JUIZ DE FORA - I - MG">JUIZ DE FORA - I - MG</option>
								<option value="LAGOA DA PRATA - MG">LAGOA DA PRATA - MG</option>
								<option value="LAGOA VERMELHA - RS">LAGOA VERMELHA - RS</option>
								<option value="LAJEADO - RS">LAJEADO - RS</option>
								<option value="LAURO DE FREITAS - I - COLÉGIO EQUIPE - BA">LAURO DE FREITAS - I - COLÉGIO EQUIPE - BA</option>
								<option value="LAVRAS - MG">LAVRAS - MG</option>
								<option value="LIBERATO SALZANO - RS">LIBERATO SALZANO - RS</option>
								<option value="LIMOEIRO DO NORTE - CE">LIMOEIRO DO NORTE - CE</option>
								<option value="LINHARES I - ES">LINHARES I - ES</option>
								<option value="LINHARES II - ES">LINHARES II - ES</option>
								<option value="LIVRAMENTO DE NOSSA SENHORA - BA">LIVRAMENTO DE NOSSA SENHORA - BA</option>
								<option value="LOANDA - PR">LOANDA - PR</option>
								<option value="LONDRINA - II - RUA NITERÓI - PR">LONDRINA - II - RUA NITERÓI - PR</option>
								<option value="LONDRINA - III - LONDRINA NORTE - PR">LONDRINA - III - LONDRINA NORTE - PR</option>
								<option value="LUIS EDUARDO MAGALHÃES - BA">LUIS EDUARDO MAGALHÃES - BA</option>
								<option value="LUZIÂNIA - GO">LUZIÂNIA - GO</option>
								<option value="MACAÉ - RJ">MACAÉ - RJ</option>
								<option value="MACAPÁ - II - AP">MACAPÁ - II - AP</option>
								<option value="MACAÚBAS - BA">MACAÚBAS - BA</option>
								<option value="MACEIÓ I - AL">MACEIÓ I - AL</option>
								<option value="MACHADINHO D'OESTE - RO">MACHADINHO D'OESTE - RO</option>
								<option value="MAGÉ - RJ">MAGÉ - RJ</option>
								<option value="MANAUS - I - AM">MANAUS - I - AM</option>
								<option value="MANGA - MG">MANGA - MG</option>
								<option value="MANHUAÇU - MG">MANHUAÇU - MG</option>
								<option value="MANOEL RIBAS - PR">MANOEL RIBAS - PR</option>
								<option value="MANTENA - MG">MANTENA - MG</option>
								<option value="MARABÁ - PA">MARABÁ - PA</option>
								<option value="MARACAJÚ - MS">MARACAJÚ - MS</option>
								<option value="MARAVILHA - SC">MARAVILHA - SC</option>
								<option value="MARÍLIA - SP">MARÍLIA - SP</option>
								<option value="MARINGÁ - PR">MARINGÁ - PR</option>
								<option value="MATINHOS - PR">MATINHOS - PR</option>
								<option value="MATO VERDE - MG">MATO VERDE - MG</option>
								<option value="MEDINA - MG">MEDINA - MG</option>
								<option value="MERCÊS - MG">MERCÊS - MG</option>
								<option value="MIGUEL CALMON - BA">MIGUEL CALMON - BA</option>
								<option value="MINEIROS - GO">MINEIROS - GO</option>
								<option value="MOGI DAS CRUZES - I - CEVIMO - CENTRO - SP">MOGI DAS CRUZES - I - CEVIMO - CENTRO - SP</option>
								<option value="MOGI-GUAÇU - FAMAC - SP">MOGI-GUAÇU - FAMAC - SP</option>
								<option value="MONTE DOURADO - PA">MONTE DOURADO - PA</option>
								<option value="MONTES CLAROS  - MG">MONTES CLAROS  - MG</option>
								<option value="MORRINHOS - GO">MORRINHOS - GO</option>
								<option value="MORRO DO CHAPÉU - BA">MORRO DO CHAPÉU - BA</option>
								<option value="MOSSORÓ - RN">MOSSORÓ - RN</option>
								<option value="MURIAÉ - MG">MURIAÉ - MG</option>
								<option value="MURICI - AL">MURICI - AL</option>
								<option value="NATAL - I - RN">NATAL - I - RN</option>
								<option value="NATAL - II - RN">NATAL - II - RN</option>
								<option value="NILÓPOLIS - RJ">NILÓPOLIS - RJ</option>
								<option value="NIQUELÂNDIA - II - CENTRO - GO">NIQUELÂNDIA - II - CENTRO - GO</option>
								<option value="NITERÓI - RJ">NITERÓI - RJ</option>
								<option value="NOVA ANDRADINA - MS">NOVA ANDRADINA - MS</option>
								<option value="NOVA CRUZ - RN">NOVA CRUZ - RN</option>
								<option value="NOVA FRIBURGO - RJ">NOVA FRIBURGO - RJ</option>
								<option value="NOVA IGUAÇU - RJ">NOVA IGUAÇU - RJ</option>
								<option value="NOVA LIMA - MG">NOVA LIMA - MG</option>
								<option value="NOVO GAMA - GO">NOVO GAMA - GO</option>
								<option value="OEIRAS - PI">OEIRAS - PI</option>
								<option value="OLHO D ÁGUA DAS FLORES - AL">OLHO D ÁGUA DAS FLORES - AL</option>
								<option value="ORIXIMINÁ - I - PA">ORIXIMINÁ - I - PA</option>
								<option value="OURINHOS - SP">OURINHOS - SP</option>
								<option value="PALHOÇA - SC">PALHOÇA - SC</option>
								<option value="PALMARES - PE">PALMARES - PE</option>
								<option value="PALMAS - I - TO">PALMAS - I - TO</option>
								<option value="PALMEIRA DOS INDIOS - AL">PALMEIRA DOS INDIOS - AL</option>
								<option value="PARACATU - MG">PARACATU - MG</option>
								<option value="PARAGOMINAS - FAMAC - PA">PARAGOMINAS - FAMAC - PA</option>
								<option value="PARANAÍBA - MS">PARANAÍBA - MS</option>
								<option value="PARANAVAÍ - PR">PARANAVAÍ - PR</option>
								<option value="PARAUAPEBAS - PA">PARAUAPEBAS - PA</option>
								<option value="PARINTINS - AM">PARINTINS - AM</option>
								<option value="PASSA QUATRO - MG">PASSA QUATRO - MG</option>
								<option value="PASSO FUNDO - RS">PASSO FUNDO - RS</option>
								<option value="PATOS - PB">PATOS - PB</option>
								<option value="PAULISTA - PE">PAULISTA - PE</option>
								<option value="PAULO AFONSO - BA">PAULO AFONSO - BA</option>
								<option value="PELOTAS - RS">PELOTAS - RS</option>
								<option value="PENAPOLIS - SP">PENAPOLIS - SP</option>
								<option value="PESQUEIRA - PE">PESQUEIRA - PE</option>
								<option value="PETROLINA - PE">PETROLINA - PE</option>
								<option value="PETRÓPOLIS - RJ">PETRÓPOLIS - RJ</option>
								<option value="PICOS - II - PI">PICOS - II - PI</option>
								<option value="PILAR -  BA">PILAR -  BA</option>
								<option value="PIMENTA BUENO - RO">PIMENTA BUENO - RO</option>
								<option value="PINDAMONHANGABA - SP">PINDAMONHANGABA - SP</option>
								<option value="PIRACANJUBA - GO">PIRACANJUBA - GO</option>
								<option value="PIRACICABA - SP">PIRACICABA - SP</option>
								<option value="PIRAPORA - MG">PIRAPORA - MG</option>
								<option value="PIRIPIRI - PI">PIRIPIRI - PI</option>
								<option value="PIUMHI - MG">PIUMHI - MG</option>
								<option value="PLANALTINA - GO">PLANALTINA - GO</option>
								<option value="POÇOES - BA">POÇOES - BA</option>
								<option value="POÇOS DE CALDAS I - MG">POÇOS DE CALDAS I - MG</option>
								<option value="PONTA PORÃ - MS">PONTA PORÃ - MS</option>
								<option value="PONTES E LACERDA - MT">PONTES E LACERDA - MT</option>
								<option value="PORTÃO - RS">PORTÃO - RS</option>
								<option value="PORTO ALEGRE DO NORTE - MT">PORTO ALEGRE DO NORTE - MT</option>
								<option value="PORTO NACIONAL - TO">PORTO NACIONAL - TO</option>
								<option value="PORTO VELHO - RO">PORTO VELHO - RO</option>
								<option value="PRIMAVERA DO LESTE - MT">PRIMAVERA DO LESTE - MT</option>
								<option value="QUERENCIA - MT">QUERENCIA - MT</option>
								<option value="QUILOMBO - SC">QUILOMBO - SC</option>
								<option value="QUIXERAMOBIM - CE">QUIXERAMOBIM - CE</option>
								<option value="RECIFE - I - ESUDA - PE">RECIFE - I - ESUDA - PE</option>
								<option value="RECIFE - II - RUA DO RIACHUELO - PE">RECIFE - II - RUA DO RIACHUELO - PE</option>
								<option value="REDENÇÃO - PA">REDENÇÃO - PA</option>
								<option value="REMANSO - BA">REMANSO - BA</option>
								<option value="RIACHÃO DO JACUÍPE - BA">RIACHÃO DO JACUÍPE - BA</option>
								<option value="RIBEIRÃO DAS NEVES - MG">RIBEIRÃO DAS NEVES - MG</option>
								<option value="RIBEIRÃO PRETO - II - SP">RIBEIRÃO PRETO - II - SP</option>
								<option value="RIO BRANCO - AC">RIO BRANCO - AC</option>
								<option value="RIO DE JANEIRO - II - CENTRO - RJ">RIO DE JANEIRO - II - CENTRO - RJ</option>
								<option value="RIO DE JANEIRO - III - CAMPO GRANDE - RJ">RIO DE JANEIRO - III - CAMPO GRANDE - RJ</option>
								<option value="RIO DE JANEIRO - IV - BENTO RIBEIRO - RJ">RIO DE JANEIRO - IV - BENTO RIBEIRO - RJ</option>
								<option value="RIO DO SUL - SC">RIO DO SUL - SC</option>
								<option value="RIO GRANDE - RS">RIO GRANDE - RS</option>
								<option value="RIO NEGRO - PR">RIO NEGRO - PR</option>
								<option value="RIO PARDO DE MINAS - MG">RIO PARDO DE MINAS - MG</option>
								<option value="RIO VERDE - GO">RIO VERDE - GO</option>
								<option value="ROLIM DE MOURA - RO">ROLIM DE MOURA - RO</option>
								<option value="RONDONÓPOLIS I - MT">RONDONÓPOLIS I - MT</option>
								<option value="ROSÁRIO DO IVAÍ - PR">ROSÁRIO DO IVAÍ - PR</option>
								<option value="ROSÁRIO DO SUL - RS">ROSÁRIO DO SUL - RS</option>
								<option value="RUBIATABA- GO">RUBIATABA- GO</option>
								<option value="RUY BARBOSA - BA">RUY BARBOSA - BA</option>
								<option value="SABARÁ - MG">SABARÁ - MG</option>
								<option value="SALGUEIRO - PE">SALGUEIRO - PE</option>
								<option value="SALINAS - MG">SALINAS - MG</option>
								<option value="SALVADOR - I - IGUATEMI - BA">SALVADOR - I - IGUATEMI - BA</option>
								<option value="SALVADOR - II - RIBEIRA - BA">SALVADOR - II - RIBEIRA - BA</option>
								<option value="SALVADOR - III - LIBERDADE - BA">SALVADOR - III - LIBERDADE - BA</option>
								<option value="SALVADOR - IV - CAJAZEIRAS - BA">SALVADOR - IV - CAJAZEIRAS - BA</option>
								<option value="SAMAMBAIA - DF">SAMAMBAIA - DF</option>
								<option value="SANTA BÁRBARA D'OESTE - SP">SANTA BÁRBARA D'OESTE - SP</option>
								<option value="SANTA CRUZ - RN">SANTA CRUZ - RN</option>
								<option value="SANTA CRUZ DO CAPIBARIBE - PE">SANTA CRUZ DO CAPIBARIBE - PE</option>
								<option value="SANTA CRUZ DO SUL - RS">SANTA CRUZ DO SUL - RS</option>
								<option value="SANTA LUZIA - I - MG">SANTA LUZIA - I - MG</option>
								<option value="SANTA MARIA - INTERAÇÃO - RS">SANTA MARIA - INTERAÇÃO - RS</option>
								<option value="SANTA ROSA - RS">SANTA ROSA - RS</option>
								<option value="SANTA TEREZINHA DE GOIAS - GO">SANTA TEREZINHA DE GOIAS - GO</option>
								<option value="SANTA VITORIA DO PALMAR - RS">SANTA VITORIA DO PALMAR - RS</option>
								<option value="SANTALUZ - BA">SANTALUZ - BA</option>
								<option value="SANTARÉM - I - CENTRO - PA">SANTARÉM - I - CENTRO - PA</option>
								<option value="SANTIAGO I - RS">SANTIAGO I - RS</option>
								<option value="SANTO ANDRÉ - SP">SANTO ANDRÉ - SP</option>
								<option value="SÃO BENTO DO SUL - SC">SÃO BENTO DO SUL - SC</option>
								<option value="SÃO BERNARDO DO CAMPO - I - SP">SÃO BERNARDO DO CAMPO - I - SP</option>
								<option value="SÃO CARLOS - SC">SÃO CARLOS - SC</option>
								<option value="SÃO CARLOS - SP">SÃO CARLOS - SP</option>
								<option value="SÃO FÉLIX DO CORIBE - BA">SÃO FÉLIX DO CORIBE - BA</option>
								<option value="SÃO FÉLIX DO XINGU - PA">SÃO FÉLIX DO XINGU - PA</option>
								<option value="SÃO FRANCISCO - MG">SÃO FRANCISCO - MG</option>
								<option value="SÃO JOÃO DE MERITI - RJ">SÃO JOÃO DE MERITI - RJ</option>
								<option value="SÃO JOÃO DO PARAÍSO - MG">SÃO JOÃO DO PARAÍSO - MG</option>
								<option value="SÃO JOSÉ DO RIO PRETO - I - COLÉGIO UNITERP - SP">SÃO JOSÉ DO RIO PRETO - I - COLÉGIO UNITERP - SP</option>
								<option value="SÃO JOSÉ DOS CAMPOS - I - JD. SATÉLITE - SP">SÃO JOSÉ DOS CAMPOS - I - JD. SATÉLITE - SP</option>
								<option value="SÃO JOSÉ DOS PINHAIS - I - COLÉGIO OPÇÃO - PR">SÃO JOSÉ DOS PINHAIS - I - COLÉGIO OPÇÃO - PR</option>
								<option value="SÃO LOURENÇO DO OESTE - SC">SÃO LOURENÇO DO OESTE - SC</option>
								<option value="SÃO LOURENÇO DO SUL - RS">SÃO LOURENÇO DO SUL - RS</option>
								<option value="SÃO LUIS I - MA">SÃO LUIS I - MA</option>
								<option value="SÃO LUÍZ GONZAGA - RS">SÃO LUÍZ GONZAGA - RS</option>
								<option value="SÃO MATEUS - ES">SÃO MATEUS - ES</option>
								<option value="SÃO MATEUS DO SUL - PR">SÃO MATEUS DO SUL - PR</option>
								<option value="SÃO MIGUEL DO ARAGUAIA - GO">SÃO MIGUEL DO ARAGUAIA - GO</option>
								<option value="SÃO PAULO - I -  CENTRO -  SP">SÃO PAULO - I -  CENTRO -  SP</option>
								<option value="SÃO RAIMUNDO NONATO - PI">SÃO RAIMUNDO NONATO - PI</option>
								<option value="SÃO VICENTE - SP">SÃO VICENTE - SP</option>
								<option value="SAPEZAL - MT">SAPEZAL - MT</option>
								<option value="SEABRA - BA">SEABRA - BA</option>
								<option value="SENHOR DO BONFIM - BA">SENHOR DO BONFIM - BA</option>
								<option value="SERRINHA - BA">SERRINHA - BA</option>
								<option value="SETE LAGOAS - MG">SETE LAGOAS - MG</option>
								<option value="SIMÕES FILHO - BA">SIMÕES FILHO - BA</option>
								<option value="SINOP I - MT">SINOP I - MT</option>
								<option value="SOBRADINHO - DF">SOBRADINHO - DF</option>
								<option value="SOBRAL - CE">SOBRAL - CE</option>
								<option value="SOROCABA - III - SP">SOROCABA - III - SP</option>
								<option value="SOUSA - PB">SOUSA - PB</option>
								<option value="SUZANO II - SP">SUZANO II - SP</option>
								<option value="TAGUATINGA - I - SETOR SUL (CENTRO) - DF">TAGUATINGA - I - SETOR SUL (CENTRO) - DF</option>
								<option value="TAGUATINGA - II - SETOR NORTE -  DF">TAGUATINGA - II - SETOR NORTE -  DF</option>
								<option value="TAILÂNDIA - PA">TAILÂNDIA - PA</option>
								<option value="TAIOBEIRAS - MG">TAIOBEIRAS - MG</option>
								<option value="TANGARÁ DA SERRA - I - UNISAT - JARDIM TANGARÁ I - MT">TANGARÁ DA SERRA - I - UNISAT - JARDIM TANGARÁ I - MT</option>
								<option value="TARAUACÁ - AC">TARAUACÁ - AC</option>
								<option value="TAUÁ - CE">TAUÁ - CE</option>
								<option value="TAUBATÉ - SP">TAUBATÉ - SP</option>
								<option value="TEIXEIRA DE FREITAS - I - BA">TEIXEIRA DE FREITAS - I - BA</option>
								<option value="TEÓFILO OTONI - MG">TEÓFILO OTONI - MG</option>
								<option value="TERESINA - PI">TERESINA - PI</option>
								<option value="TERESÓPOLIS - RJ">TERESÓPOLIS - RJ</option>
								<option value="TOLEDO - PR">TOLEDO - PR</option>
								<option value="TRÊS DE MAIO - RS">TRÊS DE MAIO - RS</option>
								<option value="TRÊS LAGOAS - MS">TRÊS LAGOAS - MS</option>
								<option value="TRÊS PASSOS - RS">TRÊS PASSOS - RS</option>
								<option value="TRINDADE - GO">TRINDADE - GO</option>
								<option value="TUBARÃO - SC">TUBARÃO - SC</option>
								<option value="TUBARÃO - UFIED - SC">TUBARÃO - UFIED - SC</option>
								<option value="TUCANO - BA">TUCANO - BA</option>
								<option value="TUCURUÍ - PA">TUCURUÍ - PA</option>
								<option value="TUPANCIRETÃ - RS">TUPANCIRETÃ - RS</option>
								<option value="UBÁ - MG">UBÁ - MG</option>
								<option value="UBERABA - MG">UBERABA - MG</option>
								<option value="UBERLÂNDIA I - MG">UBERLÂNDIA I - MG</option>
								<option value="UMUARAMA - I - GLOBAL - PR">UMUARAMA - I - GLOBAL - PR</option>
								<option value="URUAÇU - GO">URUAÇU - GO</option>
								<option value="URUGUAIANA I - RS">URUGUAIANA I - RS</option>
								<option value="UTINGA - BA">UTINGA - BA</option>
								<option value="VACARIA - RS">VACARIA - RS</option>
								<option value="VALPARAÍSO DE GOIÁS - GO">VALPARAÍSO DE GOIÁS - GO</option>
								<option value="VÁRZEA GRANDE - I - MT">VÁRZEA GRANDE - I - MT</option>
								<option value="VERANÓPOLIS - RS">VERANÓPOLIS - RS</option>
								<option value="VESPASIANO - MG">VESPASIANO - MG</option>
								<option value="VIÇOSA - MG">VIÇOSA - MG</option>
								<option value="VILA VELHA - ES">VILA VELHA - ES</option>
								<option value="VILHENA - RO">VILHENA - RO</option>
								<option value="VITÓRIA - ES">VITÓRIA - ES</option>
								<option value="VITÓRIA DA CONQUISTA - BA">VITÓRIA DA CONQUISTA - BA</option>
								<option value="VOTORANTIM - I - UNOPAR - SP">VOTORANTIM - I - UNOPAR - SP</option>
								<option value="VOTUPORANGA - SP">VOTUPORANGA - SP</option>
								<option value="WENCESLAU BRAZ - PR">WENCESLAU BRAZ - PR</option>
								<option value="XAXIM - SC">XAXIM - SC</option>
								<option value="XINGUARA - PA">XINGUARA - PA</option>
								<option value="XIQUE-XIQUE - BA">XIQUE-XIQUE - BA</option>
							</select>
						</div>
					</li>
					<li class="both">
						<label for="curso1">Curso 1* (em que é tutor):</label>
						<div>
							<select id="curso1" name="curso1" class="curso1 size2">
								<option value="">Selecione um curso</option>
								<option value="ADMINISTRAÇÃO">ADMINISTRAÇÃO</option>
								<option value="ARTES VISUAIS - LICENCIATURA">ARTES VISUAIS - LICENCIATURA</option>
								<option value="CIÊNCIAS BIOLÓGICAS - LICENCIATURA">CIÊNCIAS BIOLÓGICAS - LICENCIATURA</option>
								<option value="CIÊNCIAS CONTÁBEIS">CIÊNCIAS CONTÁBEIS</option>
								<option value="CIÊNCIAS ECONÔMICAS (ECONOMIA)">CIÊNCIAS ECONÔMICAS (ECONOMIA)</option>
								<option value="EDUCAÇÃO FÍSICA - LICENCIATURA">EDUCAÇÃO FÍSICA - LICENCIATURA</option>
								<option value="GEOGRAFIA - LICENCIATURA">GEOGRAFIA - LICENCIATURA</option>
								<option value="HISTÓRIA - LICENCIATURA">HISTÓRIA - LICENCIATURA</option>
								<option value="LETRAS - HABILITAÇÃO: LICENCIATURA EM LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS">LETRAS - HABILITAÇÃO: LICENCIATURA EM LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS</option>
								<option value="MATEMÁTICA - LICENCIATURA">MATEMÁTICA - LICENCIATURA</option>
								<option value="PEDAGOGIA - LICENCIATURA">PEDAGOGIA - LICENCIATURA</option>
								<option value="SERVIÇO SOCIAL">SERVIÇO SOCIAL</option>
								<option value="SOCIOLOGIA - LICENCIATURA">SOCIOLOGIA - LICENCIATURA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS">SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM ESTÉTICA E IMAGEM PESSOAL">SUPERIOR DE TECNOLOGIA EM ESTÉTICA E IMAGEM PESSOAL</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO AMBIENTAL">SUPERIOR DE TECNOLOGIA EM GESTÃO AMBIENTAL</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO DE RECURSOS HUMANOS">SUPERIOR DE TECNOLOGIA EM GESTÃO DE RECURSOS HUMANOS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO FINANCEIRA">SUPERIOR DE TECNOLOGIA EM GESTÃO FINANCEIRA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO HOSPITALAR">SUPERIOR DE TECNOLOGIA EM GESTÃO HOSPITALAR</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA">SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM LOGÍSTICA">SUPERIOR DE TECNOLOGIA EM LOGÍSTICA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM MARKETING">SUPERIOR DE TECNOLOGIA EM MARKETING</option>
								<option value="SUPERIOR DE TECNOLOGIA EM PROCESSOS GERENCIAIS">SUPERIOR DE TECNOLOGIA EM PROCESSOS GERENCIAIS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM SEGURANÇA DO TRABALHO">SUPERIOR DE TECNOLOGIA EM SEGURANÇA DO TRABALHO</option>
							</select>
						</div>
					</li>
					<li class="both">
						<label for="curso2">Curso 2 (em que é tutor):</label>
						<div>
							<select id="curso2" name="curso2" class="curso2 size2">
								<option value="">Selecione um curso</option>
								<option value="ADMINISTRAÇÃO">ADMINISTRAÇÃO</option>
								<option value="ARTES VISUAIS - LICENCIATURA">ARTES VISUAIS - LICENCIATURA</option>
								<option value="CIÊNCIAS BIOLÓGICAS - LICENCIATURA">CIÊNCIAS BIOLÓGICAS - LICENCIATURA</option>
								<option value="CIÊNCIAS CONTÁBEIS">CIÊNCIAS CONTÁBEIS</option>
								<option value="CIÊNCIAS ECONÔMICAS (ECONOMIA)">CIÊNCIAS ECONÔMICAS (ECONOMIA)</option>
								<option value="EDUCAÇÃO FÍSICA - LICENCIATURA">EDUCAÇÃO FÍSICA - LICENCIATURA</option>
								<option value="GEOGRAFIA - LICENCIATURA">GEOGRAFIA - LICENCIATURA</option>
								<option value="HISTÓRIA - LICENCIATURA">HISTÓRIA - LICENCIATURA</option>
								<option value="LETRAS - HABILITAÇÃO: LICENCIATURA EM LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS">LETRAS - HABILITAÇÃO: LICENCIATURA EM LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS</option>
								<option value="MATEMÁTICA - LICENCIATURA">MATEMÁTICA - LICENCIATURA</option>
								<option value="PEDAGOGIA - LICENCIATURA">PEDAGOGIA - LICENCIATURA</option>
								<option value="SERVIÇO SOCIAL">SERVIÇO SOCIAL</option>
								<option value="SOCIOLOGIA - LICENCIATURA">SOCIOLOGIA - LICENCIATURA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS">SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM ESTÉTICA E IMAGEM PESSOAL">SUPERIOR DE TECNOLOGIA EM ESTÉTICA E IMAGEM PESSOAL</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO AMBIENTAL">SUPERIOR DE TECNOLOGIA EM GESTÃO AMBIENTAL</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO DE RECURSOS HUMANOS">SUPERIOR DE TECNOLOGIA EM GESTÃO DE RECURSOS HUMANOS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO FINANCEIRA">SUPERIOR DE TECNOLOGIA EM GESTÃO FINANCEIRA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO HOSPITALAR">SUPERIOR DE TECNOLOGIA EM GESTÃO HOSPITALAR</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA">SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM LOGÍSTICA">SUPERIOR DE TECNOLOGIA EM LOGÍSTICA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM MARKETING">SUPERIOR DE TECNOLOGIA EM MARKETING</option>
								<option value="SUPERIOR DE TECNOLOGIA EM PROCESSOS GERENCIAIS">SUPERIOR DE TECNOLOGIA EM PROCESSOS GERENCIAIS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM SEGURANÇA DO TRABALHO">SUPERIOR DE TECNOLOGIA EM SEGURANÇA DO TRABALHO</option>
							</select>
						</div>
					</li>
					<li class="both">
						<label for="curso3">Curso 3 (em que é tutor):</label>
						<div>
							<select id="curso3" name="curso3" class="curso3 size2">
								<option value="">Selecione um curso</option>
								<option value="ADMINISTRAÇÃO">ADMINISTRAÇÃO</option>
								<option value="ARTES VISUAIS - LICENCIATURA">ARTES VISUAIS - LICENCIATURA</option>
								<option value="CIÊNCIAS BIOLÓGICAS - LICENCIATURA">CIÊNCIAS BIOLÓGICAS - LICENCIATURA</option>
								<option value="CIÊNCIAS CONTÁBEIS">CIÊNCIAS CONTÁBEIS</option>
								<option value="CIÊNCIAS ECONÔMICAS (ECONOMIA)">CIÊNCIAS ECONÔMICAS (ECONOMIA)</option>
								<option value="EDUCAÇÃO FÍSICA - LICENCIATURA">EDUCAÇÃO FÍSICA - LICENCIATURA</option>
								<option value="GEOGRAFIA - LICENCIATURA">GEOGRAFIA - LICENCIATURA</option>
								<option value="HISTÓRIA - LICENCIATURA">HISTÓRIA - LICENCIATURA</option>
								<option value="LETRAS - HABILITAÇÃO: LICENCIATURA EM LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS">LETRAS - HABILITAÇÃO: LICENCIATURA EM LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS</option>
								<option value="MATEMÁTICA - LICENCIATURA">MATEMÁTICA - LICENCIATURA</option>
								<option value="PEDAGOGIA - LICENCIATURA">PEDAGOGIA - LICENCIATURA</option>
								<option value="SERVIÇO SOCIAL">SERVIÇO SOCIAL</option>
								<option value="SOCIOLOGIA - LICENCIATURA">SOCIOLOGIA - LICENCIATURA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS">SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM ESTÉTICA E IMAGEM PESSOAL">SUPERIOR DE TECNOLOGIA EM ESTÉTICA E IMAGEM PESSOAL</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO AMBIENTAL">SUPERIOR DE TECNOLOGIA EM GESTÃO AMBIENTAL</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO DE RECURSOS HUMANOS">SUPERIOR DE TECNOLOGIA EM GESTÃO DE RECURSOS HUMANOS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO FINANCEIRA">SUPERIOR DE TECNOLOGIA EM GESTÃO FINANCEIRA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO HOSPITALAR">SUPERIOR DE TECNOLOGIA EM GESTÃO HOSPITALAR</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA">SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM LOGÍSTICA">SUPERIOR DE TECNOLOGIA EM LOGÍSTICA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM MARKETING">SUPERIOR DE TECNOLOGIA EM MARKETING</option>
								<option value="SUPERIOR DE TECNOLOGIA EM PROCESSOS GERENCIAIS">SUPERIOR DE TECNOLOGIA EM PROCESSOS GERENCIAIS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM SEGURANÇA DO TRABALHO">SUPERIOR DE TECNOLOGIA EM SEGURANÇA DO TRABALHO</option>
							</select>
						</div>
					</li>
					<li class="both">
						<label for="curso3">Curso 3 (em que é tutor):</label>
						<div>
							<select id="curso3" name="curso3" class="curso3 size2">
								<option value="">Selecione um curso</option>
								<option value="ADMINISTRAÇÃO">ADMINISTRAÇÃO</option>
								<option value="ARTES VISUAIS - LICENCIATURA">ARTES VISUAIS - LICENCIATURA</option>
								<option value="CIÊNCIAS BIOLÓGICAS - LICENCIATURA">CIÊNCIAS BIOLÓGICAS - LICENCIATURA</option>
								<option value="CIÊNCIAS CONTÁBEIS">CIÊNCIAS CONTÁBEIS</option>
								<option value="CIÊNCIAS ECONÔMICAS (ECONOMIA)">CIÊNCIAS ECONÔMICAS (ECONOMIA)</option>
								<option value="EDUCAÇÃO FÍSICA - LICENCIATURA">EDUCAÇÃO FÍSICA - LICENCIATURA</option>
								<option value="GEOGRAFIA - LICENCIATURA">GEOGRAFIA - LICENCIATURA</option>
								<option value="HISTÓRIA - LICENCIATURA">HISTÓRIA - LICENCIATURA</option>
								<option value="LETRAS - HABILITAÇÃO: LICENCIATURA EM LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS">LETRAS - HABILITAÇÃO: LICENCIATURA EM LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS</option>
								<option value="MATEMÁTICA - LICENCIATURA">MATEMÁTICA - LICENCIATURA</option>
								<option value="PEDAGOGIA - LICENCIATURA">PEDAGOGIA - LICENCIATURA</option>
								<option value="SERVIÇO SOCIAL">SERVIÇO SOCIAL</option>
								<option value="SOCIOLOGIA - LICENCIATURA">SOCIOLOGIA - LICENCIATURA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS">SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM ESTÉTICA E IMAGEM PESSOAL">SUPERIOR DE TECNOLOGIA EM ESTÉTICA E IMAGEM PESSOAL</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO AMBIENTAL">SUPERIOR DE TECNOLOGIA EM GESTÃO AMBIENTAL</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO DE RECURSOS HUMANOS">SUPERIOR DE TECNOLOGIA EM GESTÃO DE RECURSOS HUMANOS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO FINANCEIRA">SUPERIOR DE TECNOLOGIA EM GESTÃO FINANCEIRA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO HOSPITALAR">SUPERIOR DE TECNOLOGIA EM GESTÃO HOSPITALAR</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA">SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM LOGÍSTICA">SUPERIOR DE TECNOLOGIA EM LOGÍSTICA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM MARKETING">SUPERIOR DE TECNOLOGIA EM MARKETING</option>
								<option value="SUPERIOR DE TECNOLOGIA EM PROCESSOS GERENCIAIS">SUPERIOR DE TECNOLOGIA EM PROCESSOS GERENCIAIS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM SEGURANÇA DO TRABALHO">SUPERIOR DE TECNOLOGIA EM SEGURANÇA DO TRABALHO</option>
							</select>
						</div>
					</li>
					<li class="both">
						<label for="curso4">Curso 4 (em que é tutor):</label>
						<div>
							<select id="curso4" name="curso4" class="curso4 size2">
								<option value="">Selecione um curso</option>
								<option value="ADMINISTRAÇÃO">ADMINISTRAÇÃO</option>
								<option value="ARTES VISUAIS - LICENCIATURA">ARTES VISUAIS - LICENCIATURA</option>
								<option value="CIÊNCIAS BIOLÓGICAS - LICENCIATURA">CIÊNCIAS BIOLÓGICAS - LICENCIATURA</option>
								<option value="CIÊNCIAS CONTÁBEIS">CIÊNCIAS CONTÁBEIS</option>
								<option value="CIÊNCIAS ECONÔMICAS (ECONOMIA)">CIÊNCIAS ECONÔMICAS (ECONOMIA)</option>
								<option value="EDUCAÇÃO FÍSICA - LICENCIATURA">EDUCAÇÃO FÍSICA - LICENCIATURA</option>
								<option value="GEOGRAFIA - LICENCIATURA">GEOGRAFIA - LICENCIATURA</option>
								<option value="HISTÓRIA - LICENCIATURA">HISTÓRIA - LICENCIATURA</option>
								<option value="LETRAS - HABILITAÇÃO: LICENCIATURA EM LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS">LETRAS - HABILITAÇÃO: LICENCIATURA EM LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS</option>
								<option value="MATEMÁTICA - LICENCIATURA">MATEMÁTICA - LICENCIATURA</option>
								<option value="PEDAGOGIA - LICENCIATURA">PEDAGOGIA - LICENCIATURA</option>
								<option value="SERVIÇO SOCIAL">SERVIÇO SOCIAL</option>
								<option value="SOCIOLOGIA - LICENCIATURA">SOCIOLOGIA - LICENCIATURA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS">SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM ESTÉTICA E IMAGEM PESSOAL">SUPERIOR DE TECNOLOGIA EM ESTÉTICA E IMAGEM PESSOAL</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO AMBIENTAL">SUPERIOR DE TECNOLOGIA EM GESTÃO AMBIENTAL</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO DE RECURSOS HUMANOS">SUPERIOR DE TECNOLOGIA EM GESTÃO DE RECURSOS HUMANOS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO FINANCEIRA">SUPERIOR DE TECNOLOGIA EM GESTÃO FINANCEIRA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO HOSPITALAR">SUPERIOR DE TECNOLOGIA EM GESTÃO HOSPITALAR</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA">SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM LOGÍSTICA">SUPERIOR DE TECNOLOGIA EM LOGÍSTICA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM MARKETING">SUPERIOR DE TECNOLOGIA EM MARKETING</option>
								<option value="SUPERIOR DE TECNOLOGIA EM PROCESSOS GERENCIAIS">SUPERIOR DE TECNOLOGIA EM PROCESSOS GERENCIAIS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM SEGURANÇA DO TRABALHO">SUPERIOR DE TECNOLOGIA EM SEGURANÇA DO TRABALHO</option>
							</select>
						</div>
					</li>
					<li class="both">
						<label for="curso5">Curso 5 (em que é tutor):</label>
						<div>
							<select id="curso5" name="curso5" class="curso5 size2">
								<option value="">Selecione um curso</option>
								<option value="ADMINISTRAÇÃO">ADMINISTRAÇÃO</option>
								<option value="ARTES VISUAIS - LICENCIATURA">ARTES VISUAIS - LICENCIATURA</option>
								<option value="CIÊNCIAS BIOLÓGICAS - LICENCIATURA">CIÊNCIAS BIOLÓGICAS - LICENCIATURA</option>
								<option value="CIÊNCIAS CONTÁBEIS">CIÊNCIAS CONTÁBEIS</option>
								<option value="CIÊNCIAS ECONÔMICAS (ECONOMIA)">CIÊNCIAS ECONÔMICAS (ECONOMIA)</option>
								<option value="EDUCAÇÃO FÍSICA - LICENCIATURA">EDUCAÇÃO FÍSICA - LICENCIATURA</option>
								<option value="GEOGRAFIA - LICENCIATURA">GEOGRAFIA - LICENCIATURA</option>
								<option value="HISTÓRIA - LICENCIATURA">HISTÓRIA - LICENCIATURA</option>
								<option value="LETRAS - HABILITAÇÃO: LICENCIATURA EM LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS">LETRAS - HABILITAÇÃO: LICENCIATURA EM LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS</option>
								<option value="MATEMÁTICA - LICENCIATURA">MATEMÁTICA - LICENCIATURA</option>
								<option value="PEDAGOGIA - LICENCIATURA">PEDAGOGIA - LICENCIATURA</option>
								<option value="SERVIÇO SOCIAL">SERVIÇO SOCIAL</option>
								<option value="SOCIOLOGIA - LICENCIATURA">SOCIOLOGIA - LICENCIATURA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS">SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM ESTÉTICA E IMAGEM PESSOAL">SUPERIOR DE TECNOLOGIA EM ESTÉTICA E IMAGEM PESSOAL</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO AMBIENTAL">SUPERIOR DE TECNOLOGIA EM GESTÃO AMBIENTAL</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO DE RECURSOS HUMANOS">SUPERIOR DE TECNOLOGIA EM GESTÃO DE RECURSOS HUMANOS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO FINANCEIRA">SUPERIOR DE TECNOLOGIA EM GESTÃO FINANCEIRA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO HOSPITALAR">SUPERIOR DE TECNOLOGIA EM GESTÃO HOSPITALAR</option>
								<option value="SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA">SUPERIOR DE TECNOLOGIA EM GESTÃO PÚBLICA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM LOGÍSTICA">SUPERIOR DE TECNOLOGIA EM LOGÍSTICA</option>
								<option value="SUPERIOR DE TECNOLOGIA EM MARKETING">SUPERIOR DE TECNOLOGIA EM MARKETING</option>
								<option value="SUPERIOR DE TECNOLOGIA EM PROCESSOS GERENCIAIS">SUPERIOR DE TECNOLOGIA EM PROCESSOS GERENCIAIS</option>
								<option value="SUPERIOR DE TECNOLOGIA EM SEGURANÇA DO TRABALHO">SUPERIOR DE TECNOLOGIA EM SEGURANÇA DO TRABALHO</option>
							</select>
						</div>
					</li>
					<li>
						<label for="endereco">Endereço*:</label>
						<div>
							<input type="text" id="endereco" name="endereco" value="" class="endereco size4" />
						</div>
					</li>
					<li class="pull-right">
						<label for="numero" class="label-numero">Número*:</label>
						<div>
							<input type="text" id="numero" name="numero" value="" class="numero size1" />
						</div>
					</li>
					<li>
						<label for="bairro">Bairro*:</label>
						<div>
							<input type="text" id="bairro" name="bairro" value="" class="bairro size2" />
						</div>
					</li>
					<li class="pull-right">
						<label for="complemento">Complemento:</label>
						<div>
							<input type="text" id="complemento" name="complemento" value="" class="complemento size3" />
						</div>
					</li>
					<li>
						<label for="cep">CEP*:</label>
						<div>
							<input type="text" id="cep" name="cep" value="" class="cep size2" />
						</div>
					</li>
					<li class="pull-right">
						<label for="cidade">Cidade*:</label>
						<div>
							<input type="text" id="cidade" name="cidade" value="" class="cidade size3" />
						</div>
					</li>
					<li>
						<label for="celular">Telefone Celular*:</label>
						<div>
							<input type="text" id="celular" name="celular" value="" class="celular size2" />
						</div>
					</li>
					<li class="pull-right">
						<label for="telefone">Telefone Residencial*:</label>
						<div>
							<input type="text" id="telefone" name="telefone" value="" class="telefone size3" />
						</div>
					</li>
					<li>
						<label for="email">E-mail*:</label>
						<div>
							<input type="text" id="email" name="email" value="" class="email size5" />
						</div>
					</li>
					<li class="li_msg_obrigatorio">
						<p class="msg_obrigatorio msg_error">*campos de preenchimento obrigatório (não será divulgado).</p>
					</li>
					<li class="both">
						<div>
							<input type="checkbox" id="agree" name="agree" value="" class="agree" />
						</div>
						<label for="agree" class="label-agree">Li e concordo com os termos do regulamento.</label>
					</li>
					<li class="pull-right">
						<div>
							<button type="submit" id="submit" name="submit" class="submit">
								<span>CONFIRMAR INSCRIÇÃO</span>
							</button>
						</div>
					</li>
				</ul>
			</form>
		</div>
	</body>
</html>