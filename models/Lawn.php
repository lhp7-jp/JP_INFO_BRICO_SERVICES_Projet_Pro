<?php

class lawn extends Database
{
    /**
     * Fonction permettant de rajouter une demande de devis de jardinage.
     * 
     *@param $date : date de la demande
     *@param $surface int Surface du jardin
     *@param $description string Description du jardin
     *@param $materiel int Materiel utilisé
     *@param $mail string Mail de l'utilisateur
     *@param $phone string Numéro de téléphone de l'utilisateur
     *@return bool
     */
    public function addlawnQuote(string $date, int $surface, string $materiel, string $description, string $mail, string $phone): bool
    {
        $database = $this->connectDatabase();
        $query = 'INSERT INTO `customers` (`cu_id`, `cu_email`, `cu_phonenumber` VALUES (:cu_email, :cu_phonenumber)';
        $addQuery = $database->prepare($query);
        $addQuery->bindValue(':cu_email', $mail, PDO::PARAM_STR);
        $addQuery->bindValue(':cu_phonenumber', $phone, PDO::PARAM_STR);
        return $addQuery->execute();
        $query = 'INSERT INTO `quote_cut_garden` (`dcj_date`, `dcj_surface`, `dcj_customer_material`, `dcj_detail`, `dcj_mail_customer`,`dcj_phone_customer`) VALUES (:dcj_date, :dcj_surface, :dcj_customer_material, :dcj_detail, :dcj_mail_customer, :dcj_phone_customer)';
        $addQuery = $database->prepare($query);
        $addQuery->bindValue(':dcj_date', $date, PDO::PARAM_STR);
        $addQuery->bindValue(':dcj_surface', $surface, PDO::PARAM_INT);
        $addQuery->bindValue(':dcj_customer_material', $materiel, PDO::PARAM_INT);
        $addQuery->bindValue(':dcj_detail', $description, PDO::PARAM_STR);
        return $addQuery->execute();
    }

    /**
     * Fonction permettant de récupérer les demandes de devis de jardinage.
     * 
     *@return array
     */
    public function getAlllawnQuote(): array
    {
        $database = $this->connectDatabase();
        $query = 'SELECT `dcj_id`, DATE_FORMAT(`dcj_date`,"%d/%m/%Y") AS `dcj_date`, `dcj_surface`, `dcj_customer_material`, `dcj_detail`, `dcj_mail_customer`,`dcj_phone_customer`,`cu_id`,`qp_id` FROM `quote_cut_garden`';
        $getAlldcjQuote = $database->query($query);
        return $getAlldcjQuote->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Fonction permettant de récupérer une demande de devis de jardinage.
     * 
     *@param $id int Id de la demande
     */
    public function getlawnQuoteDetails(int $id)
    {
        $database = $this->connectDatabase();
        $query = 'SELECT `dcj_id`, DATE_FORMAT(`dcj_date`,"%d/%m/%Y") AS `dcj_date`, `dcj_surface`, `dcj_customer_material`, `dcj_detail`, `dcj_mail_customer`,`dcj_phone_customer_customer` FROM `quote_cut_garden` WHERE `dcj_id` = :dcj_id';
        $getlawnQuote = $database->prepare($query);
        $getlawnQuote->bindValue(':dcj_id', $id, PDO::PARAM_INT);
        $getlawnQuote->execute();
        return $getlawnQuote->fetch(PDO::FETCH_ASSOC);
    }


    /**
     * Fonction permettant de supprimer un devis de jardinage.
     * 
     *@param $id int Id de la demande
     */
    public function deletedcjQuote(int $id)
    {
        $database = $this->connectDatabase();
        $query = 'DELETE FROM `quote_cut_garden` WHERE `dcj_id` = :dcj_id';
        $deleteLawQuote = $database->prepare($query);
        $deleteLawQuote->bindValue(':dcj_id', $id, PDO::PARAM_INT);
        return $deleteLawQuote->execute();
    }
}
