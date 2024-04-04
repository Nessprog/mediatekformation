# Mediatekformation
## Application d'origine
L'application d'origine est disponible en suivant ce lien : https://github.com/CNED-SLAM/mediatekformation
La documentation est disponible dans le readme du dépôt ci-dessus.

## Présentation
Ce site, développé avec Symfony 5.4, permet d'accéder aux vidéos d'auto-formation proposées par une chaîne de médiathèques et qui sont aussi accessibles sur YouTube. La partie back-office permet de gérer les formations proposées une fois connecté en tant qu'administrateur.
Voici les fonctionnalités :<br>
![img1](https://github.com/Nessprog/mediatekformation/assets/117474919/7c1b700f-0d55-43c6-a805-d23ca3fe9946)
## Les différentes pages
Voici les 9 pages correspondant aux différents cas d’utilisation.
### Page 1 : Les formations - front office
Cette page était déjà codée. Une colonne recensant le nombre de formations par playlist a été ajoutée ainsi que des boutons permettant de faire un tri par ordre croissant ou décroissant.
![img2]![playlist-page](https://github.com/Nessprog/mediatekformation/assets/117474919/51bd82d3-b510-4c45-b0e8-ee0b19b57961)

### Page 2 : Page de connexion - back office
Cette page permet à l'administrateur de se connecter à la partie gestion du site grâce à ses identifiants (nom d'utilisateur et mot de passe). Cette page est accessible en ajoutant /admin à l'URL du site
![img3]![connexion - page](https://github.com/Nessprog/mediatekformation/assets/117474919/cc69e66d-9553-4943-bb8e-ebdd5bf17df7)

### Page 3 : Page des formations - back office
Cette page s'affiche lorsque l'administrateur est connecté. Elle reprend le modèle de la page des formations du front office. Au niveau du header un bouton se déconnecter est ajouté pour pouvoir fermer la session d'administration du site. Au dessus du tableau, juste sous le menu de navigation le titre de la page est affiché. Une colonne 'Action' contient deux boutons permettant soit d'éditer ou de supprimer une formation déjà présente. Tout en haut, un bouton permet d'ajouter une formation. Lors du clic sur le bouton supprimer, un pop-up apparait pour confirmer la suppression
![img4]![formations - page](https://github.com/Nessprog/mediatekformation/assets/117474919/1a030f55-27f9-4632-a77a-46f185546a43)
.
### Page 4 : Ajouter une formation
Cette page s'affiche lorsque l'administrateur clique sur le bouton ajouter une formation. Elle contient le même header et le même footer que le reste du back-office, un titre a été ajouté. Il y a un formulaire vide avec à gauche le champ pour l'id de la vidéo Youtube de la formation et à droite les champs pour la date, le titre, la playlist, la catégorie et la description de la formation. Seules la description et la catégorie ne sont pas obligatoires. La date est sous forme de DateTimePicker et doit être antérieure à la date du jour. Un bouton enregistrer permet de soumettre le formulaire.
![img5]![formation-ajout-page](https://github.com/Nessprog/mediatekformation/assets/117474919/76382008-75a6-4ac4-8ebe-d256cb24da0d)

### Page 5 : Modifier une formation
Cette page s'affiche lorsque l'administrateur clique sur le bouton éditer une formation. Elle est similaire à la page d'ajout d'une formation mais le formulaire est pré-rempli avec les informations de la formation que l'utilisateur a sélectionnée. Sous le titre, on retrouve la vidéo Youtube de la formation.
![img6]![formation-edit-page](https://github.com/Nessprog/mediatekformation/assets/117474919/f0debe8b-2222-4d1c-9861-95b1d990e395)

### Page 6 : Page des playlists - back office
Cette page s'affiche lorsque l'administrateur clique sur "Playlists" dans le menu de navigation. Elle est similaire à la page des playlists du front-office et comme la page des formations du côté admin elle a une colonne de gestion permettant d'ajouter, d'éditer ou de supprimer une playlist. Là aussi le clic sur le bouton supprimer affiche un pop up pour confirmer la suppression. La suppression d'une playlist n'est possible que si cette dernière est vide. Si ce n'est pas le cas alors un message d'erreur apparaîtra en haut de l'écran.
![img7]!playlist-admin-page](https://github.com/Nessprog/mediatekformation/assets/117474919/af18960a-44a4-4e98-a5ea-8a47c31856e4)

### Page 7 : Ajout d'une Playlist
Cette page s'affiche lorsque l'administrateur clique sur "ajouter une playlist". Il s'agit d'un formulaire avec les champs nom et description. Seul le champ nom est obligatoire. Un bouton "enregistrer" permet de soumettre le formulaire.
![img8]![playlist-ajout-page](https://github.com/Nessprog/mediatekformation/assets/117474919/03dc662c-007c-42f7-aa83-32f945e6f625)

### Page 8 : Modification d'une Playlist
Cette page s'affiche lorsque l'administrateur clique sur "Editer" dans la colonne gestion des playlists. A gauche, on retrouve le même formulaire que celui présent sur la page d'ajout d'une playlist. Il est pré-rempli avec les informations de la playlist. A droite, il y a la liste des vidéos composant la playlist avec leur miniature et leur titre.
![img9]![playlist-edit-page](https://github.com/Nessprog/mediatekformation/assets/117474919/9a22bef8-a4b5-4080-8f65-485a57dee7af)

### Page 9 : Page des catégories
Cette page s'affiche lorsque l'administrateur clique sur "catégories" dans le menu de navigation. Elle contient un titre et un formulaire permettant d'ajouter une catégorie. On ne peut ajouter une catégorie que si cette dernière n'existe pas encore. En dessous il y a un tableau composé de deux colonnes : une colonne contenant les noms des catégories et une colonne de gestion avec un bouton supprimer permettant la suppression de la catégorie sur la ligne du bouton. Le clic sur le bouton de suppression déclenche un pop up de confirmation et la suppression d'une catégorie n'est possible que si celle-ci est vide.
![img10]![categorie - page](https://github.com/Nessprog/mediatekformation/assets/117474919/c7334907-a50f-42bf-be3a-f493654ac366)




## La base de données
La base de données exploitée par le site est au format MySQL.
### Schéma conceptuel de données
Voici le schéma correspondant à la BDD.<br>
![img7](https://github.com/CNED-SLAM/mediatekformation/assets/100127886/1f1f4c83-5955-4ae9-b2f2-a030055c1d3f)
<br>video_id contient le code YouTube de la vidéo, qui permet ensuite de lancer la vidéo à l'adresse suivante :<br>
https://www.youtube.com/embed/<<<video_id>>>
### Relations issues du schéma
<code><strong>formation (id, published_at, title, video_id, description, playlist_id)</strong>
id : clé primaire
playlist_id : clé étrangère en ref. à id de playlist
<strong>playlist (id, name, description)</strong>
id : clé primaire
<strong>categorie (id, name)</strong>
id : clé primaire
<strong>formation_categorie (id_formation, id_categorie)</strong>
id_formation, id_categorie : clé primaire
id_formation : clé étrangère en ref. à id de formation
id_categorie : clé étrangère en ref. à id de categorie</code>

Remarques : 
Les clés primaires des entités sont en auto-incrémentation.<br>
Le chemin des images (des 2 tailles) n'est pas mémorisé dans la BDD car il peut être fabriqué de la façon suivante :<br>
"https://i.ytimg.com/vi/" suivi de, soit "/default.jpg" (pour la miniature), soit "/hqdefault.jpg" (pour l'image plus grande de la page d'accueil).
## Installation de l'application
- Vérifier que Composer, Git et Wamserver (ou équivalent) sont installés sur l'ordinateur.
- Télécharger le code et le dézipper dans www de Wampserver (ou dossier équivalent) puis renommer le dossier en "mediatekformation".<br>
- Ouvrir une fenêtre de commandes en mode admin, se positionner dans le dossier du projet et taper "composer install" pour reconstituer le dossier vendor.<br>
- Récupérer le fichier mediatekformation.sql en racine du projet et l'utiliser pour créer la BDD MySQL "mediatekformation" en root sans pwd (si vous voulez mettre un login/pwd d'accès, il faut le préciser dans le fichier ".env" en racine du projet).<br>
- De préférence, ouvrir l'application dans un IDE professionnel. L'adresse pour la lancer est : http://localhost/mediatekformation/public/index.php<br>
