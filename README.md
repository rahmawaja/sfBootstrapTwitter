# Symfony Bootstrap 2.0

## Versions
 Symfony : 1.4.13
 
 Bootstrap Twitter : 2.0.1
 
## Plugins
 sfPropelORMPlugin (1.1.2 => Propel 1.6)
 
 sfGuardPlugin (4.0.2)
 
 sfGuardExtraPlugin (1.4)
  
 sfJqueryReloadedPlugin (1.4.3 => jQuery 1.6.4)
 
 sfFormExtraPlugin (1.1.3)
 
 sfHtml5FormPlugin (0.4.9)

## Utilisation

Clonez le repo Github de façon récursive (pour récupérer les submodules)

	git clone --recursive git@github.com:mparpaillon/sfBootstrapTwitter.git

Créez la BDD du projet et l'utilisateur associé

Cherchez ensuite dans votre IDE la chaîne "@EDIT". Celle-ci pointe tous les champs nécessitant une saisie.

## sfHtml5FormPlugin

Ce plugin apporte un certain nombre de widgets HTML5 supplémentaires. Le fallback de ces widgets étant parfaitement propre, aucune de s'en priver.
Certains widgets tels que les types date, time ou email sont d'autant plus agréables sur smartphone (l'iPhone propose automatiquement les claviers adaptés...)

## Connexion

Quelques fixtures sont intégrées au projet. Vous pouvez vous connecter avec login = mdp = "admin"

## Utilisation de LESS

Il est possible de charger un less.js. Pour ma part j'utilise le soft SimpLESS http://wearekiss.com/simpless pour le dév et n'envoie que les CSS pour la prod.
La dernière version de less est requise depuis la maj 2.0.1 du Bootstrap Twitter. Aux dernières nouvelles, SimpLESS ne dispose pas de cette mise à jour, il faudra donc passer par un logiciel tel que Crunch http://crunchapp.net/.

## JavaScript 

jQuery
Twitter : Tooltip, Popover, etc
DataTables
File-input
