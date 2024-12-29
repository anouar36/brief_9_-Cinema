<?php
include 'db.php';
class FetchDataClente {
    private $con;
    public function __construct(){
        $db = new DBconnection ;
        $this->con = $db->con;
        } 
        public function index(){
           $FetchDataClente = "SELECT Utilisateur.nom, Reservation.numero_place,Projection.date_projection,
                                       Salle.nom, Film.titre , Statistiques.ventes_totales
                               FROM Utilisateur INNER JOIN Reservation on Utilisateur.id_utilisateur=Reservation.id_utilisateur
                                                INNER JOIN Projection on Reservation.id_projection = Projection.id_projection 
                                                INNER JOIN Salle on Salle.id_salle = Projection.id_salle
                                                INNER JOIN Film on Film.id_film =Projection.id_film
                                                INNER JOIN Statistiques ON Statistiques.id_film = Film.id_film";
                                                $result = $this->con->query($FetchDataClente);
                                                if($result->rowCount() > 0){
                                                    return $result;
                                                }else{
                                                     echo'anouar rah kayn errore';
                                                }
            } 

    }
    
    
  


?>
