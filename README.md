---- ReadMe ----

A la suite de votre mail nous expliquant qu'il faudrait joindre le fichier '.bach_history' au projet, j'ai voulu le faire. Cependant, j'ai rencontr� des erreurs que je n'ai pas compris.

J'ai donc r�alis� un "git add ."  puis un "git commit -m "fichier history" " (je ne me rappelle plus le nom que j'ai donn� je vous avoue). A la suite de quoi, j'ai eu un message d'erreur du m�me type que celui-ci : 

error: object file .git/objects/31/65329bb680e30595f242b7c4d8406ca63eeab0 is empty
fatal: loose object 3165329bb680e30595f242b7c4d8406ca63eeab0 (stored in .git/objects/31/65329bb680e30595f242b7c4d8406ca63eeab0) is corrupt


Comprenez ma surprise, je n'avais jamais vu cette erreur. Ainsi j'ai cherch� sur internet la solution � cela, j'ai trouv� un certain Nathan ( sur ce  git https://gist.github.com/yblee85/0614f3021d21e2d47139 ) qui a fait un tuto pour r�soudre cette erreur. Je l'ai donc suivi, �tape par �tape.
Cependant, en arrivant � la fin (sans faire les deux derni�res commandes qui visaient � ajouter un exemple), j'ai remarqu� que cela n'avait pas march�.

Voici ce que j'obtenais en faisant cette commande :

git fsck --full
V�rification des r�pertoires d'objet: 100% (256/256), fait.
error: refs/heads/master: invalid sha1 pointer 9cf0a5e7a9628ec670e2aed2c3819ab73f3655f7
error: refs/remotes/origin/master: invalid sha1 pointer 9cf0a5e7a9628ec670e2aed2c3819ab73f3655f7
error: HEAD: invalid sha1 pointer 9cf0a5e7a9628ec670e2aed2c3819ab73f3655f7
notice: No default references
error: 08e9c3eed928bf2ed248d2c6f0aa4b53aa522137: invalid sha1 pointer in cache-tree
dangling blob 21a836ee6d4b986c6d39a4f6d2afc137d9b0122e
dangling blob 224a1dc2904594bb692a76102f2246c3e717e1a6


Et voici ce que j'obtiens lorsque je veux faire un "git push"

error: refs/remotes/origin/master ne pointe pas sur un objet valide!
Username for 'https://github.com': OphisDgn
Password for 'https://OphisDgn@github.com':
error: refs/remotes/origin/master ne pointe pas sur un objet valide!
To https://github.com/OphisDgn/Framework.git
 ! [rejected]        master -> master (fetch first)
error: impossible de pousser des r�f�rences vers 'https://github.com/OphisDgn/Framework.git'
astuce: Les mises � jour ont �t� rejet�es car la branche distante contient du travail que
astuce: vous n'avez pas en local. Ceci est g�n�ralement caus� par un autre d�p�t pouss�
astuce: vers la m�me r�f�rence. Vous pourriez int�grer d'abord les changements distants
astuce: (par exemple 'git pull ...') avant de pousser � nouveau.
astuce: Voir la 'Note � propos des avances rapides' dans 'git push --help' pour plus d'information.


J'ai r�alis� un "git reflog master" comme dit dans un tuto et en voici le r�sultat :

error: refs/remotes/origin/master ne pointe pas sur un objet valide!
1a0a5b4 (HEAD -> master) master@{0}: commit: recuperation du fiasco git
b1cfdcd master@{1}: commit: userliste
2dad4eb master@{2}: commit: user/skills
0f80a2a master@{3}: commit: ju
fff1890 master@{4}: commit: liste user
8c26a2a master@{5}: commit: oh
3bb7ca4 master@{6}: commit: hu
973a505 master@{7}: commit: ajout
755534d master@{8}: commit (initial): first

Et lorsque je veux re-faire un autre git commit cela me dit (j'avais enregistr� la version du ReadMe avant de faire ce test) :

celine@Lieutaud-Laravel:~/framework$ git commit -a -m "essaie commit fiasco"
Sur la branche master
Votre branche est bas�e sur 'origin/master', mais la branche amont a disparu.
  (utilisez "git branch --unset-upstream" pour corriger)

Fichiers non suivis:
        README.md

aucune modification ajout�e � la validation mais des fichiers non suivis sont pr�sents


Ainsi je n'ai pas compris pourquoi �a me faisait cela et j'en suis d�sol�e. 
Je tiens aussi � pr�ciser que mes noms de commit sont tout le temps de ce type, je n'arrive pas � me fier aux noms que l'on donne.

