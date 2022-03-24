#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: customers
#------------------------------------------------------------

CREATE TABLE customers(
        cu_id          Int  Auto_increment  NOT NULL ,
        cu_email       Varchar (50) NOT NULL ,
        cu_phonenumber Int NOT NULL
	,CONSTRAINT customers_PK PRIMARY KEY (cu_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_cut_garden
#------------------------------------------------------------

CREATE TABLE quote_cut_garden(
        qcg_id                Int  Auto_increment  NOT NULL ,
        qcg_surface           Int NOT NULL ,
        qcg_customer_material Bool NOT NULL ,
        qcg_price             DECIMAL (15,3)  NOT NULL ,
        qcg_date              Date NOT NULL ,
        qcg_detail            Varchar (255) NOT NULL ,
        qcg_mail_customer     Varchar (50) NOT NULL ,
        qcg_phone_customer    Int NOT NULL ,
        cu_id                 Int NOT NULL
	,CONSTRAINT quote_cut_garden_PK PRIMARY KEY (qcg_id)

	,CONSTRAINT quote_cut_garden_customers_FK FOREIGN KEY (cu_id) REFERENCES customers(cu_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_cut_tree
#------------------------------------------------------------

CREATE TABLE quote_cut_tree(
        qct_id                Int  Auto_increment  NOT NULL ,
        qct_number            Int NOT NULL ,
        qct_customer_material Bool NOT NULL ,
        qct_price             DECIMAL (15,3)  NOT NULL ,
        qct_date              Date NOT NULL ,
        qct_detail            Varchar (255) NOT NULL ,
        qct_mail_customer     Varchar (50) NOT NULL ,
        qct_phone_customer    Int NOT NULL ,
        cu_id                 Int NOT NULL
	,CONSTRAINT quote_cut_tree_PK PRIMARY KEY (qct_id)

	,CONSTRAINT quote_cut_tree_customers_FK FOREIGN KEY (cu_id) REFERENCES customers(cu_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_plumbing _diy
#------------------------------------------------------------

CREATE TABLE quote_plumbing__diy(
        qpd_id             Int  Auto_increment  NOT NULL ,
        qpd_gasket_change  Bool NOT NULL ,
        qpd_faucet_change  Bool NOT NULL ,
        qpd_unblocking     Bool NOT NULL ,
        qpd_number         Int NOT NULL ,
        qpd_price          DECIMAL (15,3)  NOT NULL ,
        qpd_date           Date NOT NULL ,
        qpd_detail         Varchar (255) NOT NULL ,
        qpd_mail_customer  Varchar (50) NOT NULL ,
        qpd_phone_customer Int NOT NULL ,
        cu_id              Int NOT NULL
	,CONSTRAINT quote_plumbing__diy_PK PRIMARY KEY (qpd_id)

	,CONSTRAINT quote_plumbing__diy_customers_FK FOREIGN KEY (cu_id) REFERENCES customers(cu_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_electricity_diy
#------------------------------------------------------------

CREATE TABLE quote_electricity_diy(
        qed_id              Int  Auto_increment  NOT NULL ,
        qed_installation    Bool NOT NULL ,
        qed_replacement     Bool NOT NULL ,
        qed_repair          Bool NOT NULL ,
        qed_socket          Bool NOT NULL ,
        qed_lamp            Bool NOT NULL ,
        qed_circuit_breaker Bool NOT NULL ,
        qed_number          Int NOT NULL ,
        qed_price           DECIMAL (15,3)  NOT NULL ,
        qed_date            Date NOT NULL ,
        qed_detail          Varchar (255) NOT NULL ,
        qed_mail_customer   Varchar (50) NOT NULL ,
        qed_phone_customer  Int NOT NULL
	,CONSTRAINT quote_electricity_diy_PK PRIMARY KEY (qed_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_repair_info
#------------------------------------------------------------

CREATE TABLE quote_repair_info(
        qri_id                Int  Auto_increment  NOT NULL ,
        qri_repair            Bool NOT NULL ,
        qri_customer_material Bool NOT NULL ,
        qri_number            Int NOT NULL ,
        qri_price             DECIMAL (15,3)  NOT NULL ,
        qri_date              Date NOT NULL ,
        qri_detail            Varchar (255) NOT NULL ,
        qri_mail_customer     Varchar (50) NOT NULL ,
        qri_phone_customer    Int NOT NULL ,
        cu_id                 Int NOT NULL
	,CONSTRAINT quote_repair_info_PK PRIMARY KEY (qri_id)

	,CONSTRAINT quote_repair_info_customers_FK FOREIGN KEY (cu_id) REFERENCES customers(cu_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_masonry_diy
#------------------------------------------------------------

CREATE TABLE quote_masonry_diy(
        qos_id             Int  Auto_increment  NOT NULL ,
        qos_number         Int NOT NULL ,
        qos_price          DECIMAL (15,3)  NOT NULL ,
        qos_date           Date NOT NULL ,
        qos_detail         Varchar (255) NOT NULL ,
        qos_mail_customer  Varchar (50) NOT NULL ,
        qos_phone_customer Int NOT NULL ,
        cu_id              Int NOT NULL
	,CONSTRAINT quote_masonry_diy_PK PRIMARY KEY (qos_id)

	,CONSTRAINT quote_masonry_diy_customers_FK FOREIGN KEY (cu_id) REFERENCES customers(cu_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_other_services
#------------------------------------------------------------

CREATE TABLE quote_other_services(
        qos_id             Int  Auto_increment  NOT NULL ,
        qos_number         Int NOT NULL ,
        qos_price          DECIMAL (15,3)  NOT NULL ,
        qos_date           Date NOT NULL ,
        qos_detail         Varchar (255) NOT NULL ,
        qos_mail_customer  Varchar (50) NOT NULL ,
        qos_phone_customer Int NOT NULL ,
        cu_id              Int NOT NULL
	,CONSTRAINT quote_other_services_PK PRIMARY KEY (qos_id)

	,CONSTRAINT quote_other_services_customers_FK FOREIGN KEY (cu_id) REFERENCES customers(cu_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: customer a besoin user quote_electricity_diy
#------------------------------------------------------------

CREATE TABLE customer_a_besoin_user_quote_electricity_diy(
        cu_id           Int NOT NULL ,
        cu_id_customers Int NOT NULL ,
        qed_id          Int NOT NULL
	,CONSTRAINT customer_a_besoin_user_quote_electricity_diy_PK PRIMARY KEY (cu_id,cu_id_customers,qed_id)

	,CONSTRAINT customer_a_besoin_user_quote_electricity_diy_customers_FK FOREIGN KEY (cu_id) REFERENCES customers(cu_id)
	,CONSTRAINT customer_a_besoin_user_quote_electricity_diy_customers0_FK FOREIGN KEY (cu_id_customers) REFERENCES customers(cu_id)
	,CONSTRAINT customer_a_besoin_user_quote_electricity_diy_quote_electricity_diy1_FK FOREIGN KEY (qed_id) REFERENCES quote_electricity_diy(qed_id)
)ENGINE=InnoDB;

