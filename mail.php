### // La fonction ' mail ' permet de créer un mail.
### mail($mail_destinataire, "Sujet du mail", $message, $header);

### // Pour récuperer un $mail tu effectue une requête sur ta base de donnée ou avec un $_POST['mail']
### // Pour la requête :

### $req_user = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
### $req_user->execute(array($_SESSION['id']));
### $user = $req_user->fetch();

### $mail = $user['mail'];
### $mail_destinataire = $mail;
