# Symfony Bootstrap 2.0

## Versions
 Symfony : 1.4.13
 
 Bootstrap Twitter : 2.0
 
## Plugins
 sfPropelORMPlugin (1.1.2 => Propel 1.6)
 
 sfGuardPlugin (4.0.2)
 
 sfGuardExtraPlugin (1.4)
  
 sfJqueryReloadedPlugin (1.4.3 => jQuery 1.6.4)
 
 sfFormExtraPlugin (1.1.3)

## Utilisation

Clonez le repo Github de façon récursive (pour récupérer les submodules)

	git clone --recursive ...

Créez la BDD du projet et l'utilisateur associé

Cherchez ensuite dans votre IDE la chaîne "@EDIT". Celle-ci pointe tous les champs nécessitant une saisie.

## Connexion

Quelques fixtures sont intégrées au projet. Vous pouvez vous connecter avec login = mdp = "admin"

## Utilisation de LESS

Il est possible de charger un less.js. Pour ma part j'utilise le soft SimpLESS http://wearekiss.com/simpless pour le dév et n'envoie que les CSS pour la prod.

## JavaScript 

jQuery
Twitter : Tooltip, Popover, etc
DataTables
File-input
