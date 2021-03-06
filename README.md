# Symfony Bootstrap 2.0

## Versions
 Symfony : 1.4.13
 
 Bootstrap Twitter : 2.0.4
 
## Démo

http://sfbootstrap.michelparpaillon.com/
 
## Plugins
 sfPropelORMPlugin (1.4.1 => Propel branch 1.6)
 
 sfGuardPlugin (4.0.2)
 
 sfGuardExtraPlugin (1.4)
  
 sfJqueryReloadedPlugin (1.4.3 => jQuery 1.6.4)
 
 sfFormExtraPlugin (1.1.3)
 
 sfHtml5FormPlugin (0.4.9)

## Checkout (git >= 1.6.5)

Clonez le repo Github de façon récursive (pour récupérer les submodules)

	git clone --recursive git@github.com:mparpaillon/sfBootstrapTwitter.git

## Checkout (git < 1.6.5)	

	git clone git@github.com:mparpaillon/sfBootstrapTwitter.git
	cd sfBootstrapTwitter
	git submodule update --init

Cela provoquera le checkout de sfPropelORMPlugin. Ce procédé n'étant pas récursif il faudra alors faire comme suit :

	cd plugins/sfPropelORMPlugin
	git submodule update --init
	
## Initialisation

Créez la BDD du projet et l'utilisateur associé

Cherchez ensuite via votre IDE la chaîne "@EDIT". Celle-ci pointe tous les champs nécessitant une saisie.

## sfHtml5FormPlugin

Ce plugin apporte un certain nombre de widgets HTML5 supplémentaires. Le fallback de ces widgets étant propre sur tous les navigateurs, aucune raison de s'en priver.
Certains widgets tels que les types date, time ou email seront interpretés différemment sur certains smartphones tels que l'iPhone (Clavier spécifique pour la date, la durée, etc)

## Connexion

Quelques fixtures sont intégrées au projet. Vous pouvez vous connecter avec login = mdp = "admin"

## JavaScript 

jQuery
Twitter : Tooltip, Popover, etc
DataTables
File-input

## LESS

Je conseille l'utilisation d'un compilateur tel que SimpLESS pour l'utilisation du LESS.
Il est également possible d'utiliser le fichier less-1.3.0.min.js pour la compilation au chargement. Cela sous-entend de lier les fichiers LESS directement dans la balise "head" de layout.php

## Roadmap

Intégration du isicsBreadcrumbPlugin pour la gestion des Breadcrumbs

Création d'un script simplifiant l'initialisation du projet

Intégrer https://github.com/real-chocopanda/sfTwitterBootstrapPlugin

Amélioration des tris dans les dataTables (ajout des tris pour les colonnes de types HTML et Images)

Intégration de l'excellente collection d'icônes Fugue : http://p.yusukekamiyamane.com/

Création d'un dashboard Drag n Drop personnalisable