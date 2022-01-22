<?php
declare(strict_types=1);



require_once 'Reservation.php';
require_once 'Personne.php';
require_once 'Destination.php';
require_once 'Option.php';
require_once 'Arrive.php';
require_once 'Depart.php';

class Database
{

    public function connect()
    {
        $dsn = 'mysql:host=localhost;dbname=monbd';
        $username = 'root';
        $password = '';
        try {
            // Tester s'il y a des erreurs au moment de la connexion
            return new \PDO($dsn, $username, $password);
        } catch (\Exception $exception) {// S'il y a des erreurs,
            die($exception->getMessage()); // Arrete l'execution en affichant le message d'erreur
        }
    }

    public function getDepartByName(string $nom)
    {
        try {
            // Se connecter à la base de donnees
            $pdo = $this->connect();
            // pour eviter l'attaque: Injection de dependance
            $query = $pdo->prepare('select * from depart where titre = :u');
            $query->bindParam(':u', $nom, \PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch();
            if ($result === false) {
                return null;
            }
            return $result;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getOptionsByName(string $nom)
    {
        try {
            // Se connecter à la base de donnees
            $pdo = $this->connect();
            // pour eviter l'attaque: Injection de dependance
            $query = $pdo->prepare('select * from options where id = :u');
            $query->bindParam(':u', $id, \PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch();
            if ($result === false) {
                return null;
            }
            return $result;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

     public function getArriveByName(string $nom)
    {
        try {
            // Se connecter à la base de donnees
            $pdo = $this->connect();
            // pour eviter l'attaque: Injection de dependance
            $query = $pdo->prepare('select * from arrive where titre = :u');
            $query->bindParam(':u', $nom, \PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch();
            if ($result === false) {
                return null;
            }
            return $result;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    public function getOption(string $name)
    {
        try {
            $pdo = $this->connect();
            $sql = "select * from options where id_opt = :id";
            $query = $pdo->prepare($sql);
            $query->bindParam(":id", $name, PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch();
            return $result;
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getOptions()
    {
        try {
            // Se connecter à la base de donnees
            $pdo = $this->connect();
            // pour eviter l'attaque: Injection de dependance
            $query = $pdo->prepare('select * from options');
            $query->execute();
            $result = [];
            while ($row = $query->fetch()) {
                $result[] = $row['id_opt'];
            }

            foreach ($result as $key => $value) {
                if ($value === false) {
                return null;
            }
            return $result;
        }
    }
         catch (Exception $e) {
            echo $e->getMessage();
        }

}

    public function getDepart()
    {
        try {
            $pdo = $this->connect();
            $query = $pdo->prepare('select * from depart');
            $query->execute();

            while ($row = $query->fetch()) {
                $result[] = $row['titre'];
            }

            foreach ($result as $value) {
                if ($value === false) {
                return null;
            }
            return $result;
        }
    }
         catch (Exception $e) {
            echo $e->getMessage();
        }

}

    public function getArrive()
    {
        try {
            $pdo = $this->connect();
            $query = $pdo->prepare('select titre from arrive');
            $query->execute();
            $result = [];
            while ($row = $query->fetch()) {
                $result[] = $row['titre'];
            }

            foreach ($result as $value) {
                if ($value === false) {
                return null;
            }
            }

            return $result;
        }
         catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function addArrive(Arrive $arrive)
    {
        try{
            $pdo = $this->connect();

            $titre = $arrive->getTitre();
            $description = $arrive->getDescription();
            $prix = $arrive->getPrix();

            $sql = "insert into arrive(titre, description, prix)
                values(:b,:c,:d)";
            $query = $pdo->prepare($sql);

            $query->bindParam(':b', $titre, PDO::PARAM_STR);
            $query->bindParam(':c', $description, PDO::PARAM_STR);
            $query->bindParam(':d', $prix, PDO::PARAM_INT);

            if($query->execute()){
                echo "reussi";
                /*header('Location: ..\test.php');*/
            }
            else{
                echo "echec";
                /*header('Location: page.php');*/
            }


        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function addDepart(Depart $depart)
    {
        try{
            $pdo = $this->connect();

            $titre = $depart->getTitre();
            $description = $depart->getDescription();
            $prix = $depart->getPrix();

            $sql = "insert into depart(titre, description, prix)
                values(:b,:c,:d)";
            $query = $pdo->prepare($sql);

            $query->bindParam(':b', $titre, PDO::PARAM_STR);
            $query->bindParam(':c', $description, PDO::PARAM_STR);
            $query->bindParam(':d', $prix, PDO::PARAM_INT);

            if($query->execute()){
                echo "reussi";
                /*header('Location: ..\test.php');*/
            }
            else{
                echo "echec";
                /*header('Location: page.php');*/
            }


        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function addOptions(Option $option)
    {
         try{
            $pdo = $this->connect();

            $id = $option->getId();
            $hotele = $option->getHotele();
            $transport = $option->getTransport();
            $prix = $option->getPrix();

            $sql = "insert into options(id_opt, hotele, transport, prix)
                values(:a,:b,:c,:d)";
            $query = $pdo->prepare($sql);

            $query->bindParam(':a', $id, PDO::PARAM_STR);
            $query->bindParam(':b', $hotele, PDO::PARAM_STR);
            $query->bindParam(':c', $transport, PDO::PARAM_STR);
            $query->bindParam(':d', $prix, PDO::PARAM_INT);

            if($query->execute()){
                echo "reussi";
                /*header('Location: ..\test.php');*/
            }
            else{
                echo "echec";
                /*header('Location: page.php');*/
            }


        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function addReservation(Reservation $reservation)
    {
        try{
            $pdo = $this->connect();

            $id_pers = $reservation->getId_pers();
            $options = $reservation->getOptions();
            $arrive = $reservation->getArrive();
            $depart = $reservation->getDepart();
            $date = $reservation->getDate();
            $prix = $reservation->getPrix();
            $nb_pers = $reservation->getNb();
            $horaire = $reservation->getHoraire();

            $sql = "insert into reservation(id_pers, options, arrive,  depart, date, prix, nb_pers, horaire)
                values(:a,:b,:c,:d,:e,:f,:g,:h)";
            $query = $pdo->prepare($sql);

            $query->bindParam(':a', $id_pers, PDO::PARAM_INT);
            $query->bindParam(':b', $options, PDO::PARAM_STR);
            $query->bindParam(':c', $arrive, PDO::PARAM_STR);
            $query->bindParam(':d', $depart, PDO::PARAM_STR);
            $query->bindParam(':e', $date, PDO::PARAM_STR);
            $query->bindParam(':f', $prix, PDO::PARAM_INT);
            $query->bindParam(':g', $nb_pers, PDO::PARAM_INT);
            $query->bindParam(':h', $horaire, PDO::PARAM_STR);

            if($query->execute()){
                echo "reussi";
                /*header('Location: ..\test.php');*/
            }
            else{
                echo "echec";
                /*header('Location: page.php');*/
            }


        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

     public function checkEmail($email)
    {
        try {
            $pdo = $this->connect();
            $sql = "select * from personne where email = :email";
            $query = $pdo->prepare($sql);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch();
            if (empty($result)) {
                return true;
            }
            else{
                return false;
            }
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function addPersonne(Personne $personne)
    {
        try{
            $pdo = $this->connect();

            $nom = $personne->getNom();
            $prenom = $personne->getPrenom();
            $email = $personne->getEmail();
            $tele = $personne->getTele();
            $password = $personne->getPassword();


            $sql = 'insert into personne(nom, prenom, email, tele, mdp) values(:nom, :prenom, :email, :tele, :mdp)';
            $query = $pdo->prepare($sql);

            $query->bindParam(':nom', $nom, PDO::PARAM_STR);
            $query->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':tele', $tele, PDO::PARAM_INT);
            $query->bindParam(':mdp', $password, PDO::PARAM_STR);

            if($this->checkEmail($email)){
                $query->execute();
                return true;
            }
            else{
                echo "<script>alert('Email already existed')</script>";
                return false;
            }

        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function calculPrixT(Reservation $reservation): int
    {
        try {
            $pdo = $this->connect();

            $nb_pers = $reservation->getNb();
            $options = $reservation->getOptions();
            $depart = $reservation->getDepart();
            $arrive = $reservation->getArrive();

            $query1 = $pdo->prepare("select prix from depart where titre = :depart");
            $query2 = $pdo->prepare("select prix from arrive where titre = :arrive");
            $query3 = $pdo->prepare("select prix from options where id_opt = :options");

            $query1->bindParam(':depart', $depart, PDO::PARAM_STR);
            $query2->bindParam(':arrive', $arrive, PDO::PARAM_STR);
            $query3->bindParam(':options', $options, PDO::PARAM_STR);

            $query1->execute();
            $query2->execute();
            $query3->execute();

            $pOption = $query3->fetch();
            $pArrive = $query2->fetch();
            $pDepart = $query1->fetch();

            $prixT = (intval($pOption['prix']) + intval($pArrive['prix']) + intval($pDepart['prix'])) * $nb_pers;
            
            return $prixT;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
   

    public function verifyLogin(string $email, string $password)
    {
        try {
        $pdo = $this->connect();
        $sql = "select * from personne where email = :email";
        $query = $pdo->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        if(empty($result)){
            return false;
        }
        else{
        if(password_verify($password, $result['mdp'])){
            $personne = new Personne();
            $personne->setNom($result['nom']);
            $personne->setId((int)$result['id_pers']);
            $personne->setPrenom($result['prenom']);
            $_SESSION['USER'] = serialize($personne);
            $_SESSION['loggedin'] = true;
            return true;
        }   
        else{
            return false;
        }
        }
        
   
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }

    public function getUserById($id_pers)
    {
        try {
            $pdo = $this->connect();
            $sql = "select * from personne where id_pers = '$id_pers'";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }
    public function getReservationById($id)
    {
        try {
            $pdo = $this->connect();
            $sql = "select * from reservation where id_res = '$id'";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }

    public function getUser(string $email, string $password)
    {
        try {
            $pdo = $this->connect();
            $sql = "select * from personne where email = :email and mdp = :password";
            $query = $pdo->prepare($sql);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':password', $password, PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }

    public function getReservationByPersonne(int $id_pers)
    {
        try {
            $pdo = $this->connect();
            $sql = "select * from reservation where id_pers = :id_pers";
            $query = $pdo->prepare($sql);
            $query->bindParam(':id_pers', $id_pers, PDO::PARAM_INT);
            $query->execute();
            while($row = $query->fetch()){
                $result[] = $row;
            }
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function display($table)
    {
        try {
            $pdo = $this->connect();
            $sql = "select * from $table";
            $query = $pdo->prepare($sql);
            $query->execute();
            while($row = $query->fetch()){
                $result[] = $row;
            }
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function delete($table, $id)
    {
        try {
            $pdo = $this->connect();
            $sql = "delete from $table";

            switch ($table) {
                case 'arrive':
                    $sql .= " where id_arrive = '$id'";
                    break;

                case 'depart':
                    $sql .= " where id_depart = '$id'";
                    break;

                case 'options':
                    $sql .= " where id_opt = '$id'";
                    break;

                case 'personne':
                    $sql .= " where id_pers = '$id'";
                    break;

                case 'reservation':
                    $sql .= " where id_res = '$id'";
                    break;
                
                default:
                    return null;
                    break;
            }
            $sql;
            $query = $pdo->prepare($sql);
            $result = $query->execute();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function create($table, $objet)
    {
        try {
            switch ($table) {
                case 'personne':
                    $this->addPersonne($objet);
                    break;
                case 'reservation':
                    $this->addReservation($objet);
                    break;
                case 'arrive':
                    $this->addArrive($objet);
                    break;
                case 'depart':
                    $this->addDepart($objet);
                    break;
                case 'options':
                    $this->addOptions($objet);
                    break;
                
                default:
                    return null;
                    break;
        }
            } catch (Exception $e) {
                echo $e->getMessage();
            }    
    }



    public function update($table, $objet)
    {
        try {
            switch ($table) {
                case 'personne':
                    $this->updatePersonne($objet);
                    break;
                case 'reservation':
                    $this->updateReservation($objet);
                    break;
                case 'arrive':
                    $this->updateArrive($objet);
                    break;
                case 'depart':
                    $this->updateDepart($objet);
                    break;
                case 'options':
                    $this->updateOptions($objet);
                    break;
                
                default:
                    return null;
                    break;
        }
            } catch (Exception $e) {
                echo $e->getMessage();
            }    
    }

    public function updatePersonne($objet)
    {
        try {
            $pdo = $this->connect();

            $nom = $objet['nom'];
            $prenom = $objet['prenom'];
            $email = $objet['email'];
            $tele = $objet['tele'];
            $id_pers = $objet['id'];

            if (!empty($objet)) {
                $sql = "update personne set nom = '$nom', prenom = '$prenom', email = '$email', tele = '$tele' where id_pers = '$id_pers'";
                $query = $pdo->prepare($sql);
                $result = $query->execute();
                if ($result) {
                    header("Location: displayPersonne.php");
                }
                else{
                    header("Location: editPersonne.php");
                }
            }

            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateDepart($objet)
    {
        try {
            $pdo = $this->connect();

            $titre = $objet['titre'];
            $description = $objet['description'];
            $prix = $objet['prix'];
            $id_depart = $objet['id'];

            if (!empty($objet)) {
                $sql = "update depart set titre = '$titre', description = '$description', prix = '$prix' where id_depart = '$id_depart'";
                $query = $pdo->prepare($sql);
                $result = $query->execute();
                if ($result) {
                    header("Location: displayDepart.php");
                }
                else{
                    header("Location: editDepart.php");
                }
            }

            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateArrive($objet)
    {
        try {
            $pdo = $this->connect();

            $titre = $objet['titre'];
            $description = $objet['description'];
            $prix = $objet['prix'];
            $id_arrive = $objet['id'];

            if (!empty($objet)) {
                $sql = "update arrive set titre = '$titre', description = '$description', prix = '$prix' where id_arrive = '$id_arrive'";
                $query = $pdo->prepare($sql);
                $result = $query->execute();
                if ($result) {
                    header("Location: displayArrive.php");
                }
                else{
                    header("Location: editArrive.php");
                }
            }

            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateReservation($objet)
    {
        try {
            $pdo = $this->connect();

            $options = $objet['options'];
            $arrive = $objet['arrive'];
            $depart = $objet['depart'];
            $prix = $objet['prix'];
            $nb_pers = $objet['nb_pers'];
            $horaire = $objet['horaire'];
            $date = $objet['date'];
            $id_pers = $objet['id_pers'];
            $id_res = $objet['id'];

            if (!empty($objet)) {
                $sql = "update reservation set options = '$options', arrive = '$arrive', depart = '$depart', prix = '$prix', nb_pers = '$nb_pers', horaire = '$horaire', id_pers = '$id_pers',date = '$date' where id_res = '$id_res'";
                $query = $pdo->prepare($sql);
                $result = $query->execute();
                if ($result) {
                    header("Location: displayReservation.php");
                }
                else{
                    header("Location: editReservation.php");
                }
            }

            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateOptions($objet)
    {
        try {
        $pdo = $this->connect();

            $hotele = $objet['hotele'];
            $transport = $objet['transport'];
            $prix = $objet['prix'];
            $id_opt = $objet['id'];

            if (!empty($objet)) {
                $sql = "update options set hotele = '$hotele', transport = '$transport', prix = '$prix' where id_opt = '$id_opt'";
                $query = $pdo->prepare($sql);
                $result = $query->execute();
                if ($result) {
                    header("Location: displayOptions.php");
                }
                else{
                    header("Location: editOptions.php");
                }
            }
        }
            catch (Exception $e) {
            echo $e->getMessage();
            }
    }

    public function displayById($table, $id)
    {
        try {
            switch ($table) {
                case 'personne':
                    return $this->getUserById($id);
                    break;
                case 'reservation':
                    return $this->getReservationById($id);
                    break;
                case 'arrive':
                    return $this->getArriveById($id);
                    break;
                case 'depart':
                    return $this->getDepartById($id);
                    break;
                case 'options':
                    return $this->getOptionsById($id);
                    break;
                default:
                    return null;
                    break;
            }


        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getOptionsById($id)
    {
        try {
            $pdo = $this->connect();
            $sql = "select * from options where id_opt = '$id'";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getArriveById($id)
    {
        try {
            $pdo = $this->connect();
            $sql = "select * from arrive where id_arrive = '$id'";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getDepartById($id)
    {
        try {
            $pdo = $this->connect();
            $sql = "select * from depart where id_depart = '$id'";
            $query = $pdo->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}


