#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: customers
#------------------------------------------------------------

CREATE TABLE customers(
        cu_id          Int  Auto_increment  NOT NULL ,
        cu_email       Varchar (10) NOT NULL ,
        cu_phonenumber Int NOT NULL
	,CONSTRAINT customers_PK PRIMARY KEY (cu_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_plumbing _diy
#------------------------------------------------------------

CREATE TABLE quote_plumbing__diy(
        qpd_id             Int  Auto_increment  NOT NULL ,
        qpd_gasket_change  Bool NOT NULL ,
        qpd_faucet_change  Bool NOT NULL ,
        qpd_unblocking     Bool NOT NULL ,
        qpd_detail         Varchar (255) NOT NULL ,
        qpd_number         Int NOT NULL ,
        qpd_mail_customer  Varchar (255) NOT NULL ,
        qpd_phone_customer Int NOT NULL ,
        cu_id              Int NOT NULL
	,CONSTRAINT quote_plumbing__diy_PK PRIMARY KEY (qpd_id)

	,CONSTRAINT quote_plumbing__diy_customers_FK FOREIGN KEY (cu_id) REFERENCES customers(cu_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_other_services
#------------------------------------------------------------

CREATE TABLE quote_other_services(
        qos_id             Int  Auto_increment  NOT NULL ,
        qos_detail         Varchar (255) NOT NULL ,
        qosi_number        Int NOT NULL ,
        qos_mail_customer  Varchar (255) NOT NULL ,
        qos_phone_customer Int NOT NULL
	,CONSTRAINT quote_other_services_PK PRIMARY KEY (qos_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_price_info
#------------------------------------------------------------

CREATE TABLE quote_price_info(
        qp_id            Int  Auto_increment  NOT NULL ,
        qp_price_hour    DECIMAL (15,3)  NOT NULL ,
        qp_price_halfday DECIMAL (15,3)  NOT NULL ,
        qp_price_day     DECIMAL (15,3)  NOT NULL
	,CONSTRAINT quote_price_info_PK PRIMARY KEY (qp_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_install_info
#------------------------------------------------------------

CREATE TABLE quote_install_info(
        qii_id             Int  Auto_increment  NOT NULL ,
        qii_install        Bool NOT NULL ,
        qii_name_material  Varchar (50) NOT NULL ,
        qii_number         Int NOT NULL ,
        qii_detail         Varchar (255) NOT NULL ,
        qii_mail_customer  Varchar (255) NOT NULL ,
        qii_phone_customer Int NOT NULL ,
        qii_repair         Bool NOT NULL ,
        cu_id              Int NOT NULL ,
        qp_id              Int NOT NULL
	,CONSTRAINT quote_install_info_PK PRIMARY KEY (qii_id)

	,CONSTRAINT quote_install_info_customers_FK FOREIGN KEY (cu_id) REFERENCES customers(cu_id)
	,CONSTRAINT quote_install_info_quote_price_info0_FK FOREIGN KEY (qp_id) REFERENCES quote_price_info(qp_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_price_electricity
#------------------------------------------------------------

CREATE TABLE quote_price_electricity(
        qp_id            Int  Auto_increment  NOT NULL ,
        qp_price_hour    DECIMAL (15,3)  NOT NULL ,
        qp_price_halfday DECIMAL (15,3)  NOT NULL ,
        qp_price_day     DECIMAL (15,3)  NOT NULL
	,CONSTRAINT quote_price_electricity_PK PRIMARY KEY (qp_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_electricity_diy
#------------------------------------------------------------

CREATE TABLE quote_electricity_diy(
        qed_id             Int  Auto_increment  NOT NULL ,
        qed_installation   Bool NOT NULL ,
        qed_replacement    Bool NOT NULL ,
        qed_repair         Bool NOT NULL ,
        qed_name_material  Varchar (50) NOT NULL ,
        qed_detail         Varchar (255) NOT NULL ,
        qed_number         Int NOT NULL ,
        qed_mail_customer  Varchar (255) NOT NULL ,
        qed_phone_customer Int NOT NULL ,
        qp_id              Int NOT NULL
	,CONSTRAINT quote_electricity_diy_PK PRIMARY KEY (qed_id)

	,CONSTRAINT quote_electricity_diy_quote_price_electricity_FK FOREIGN KEY (qp_id) REFERENCES quote_price_electricity(qp_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_price_plumbing
#------------------------------------------------------------

CREATE TABLE quote_price_plumbing(
        qp_id            Int  Auto_increment  NOT NULL ,
        qp_price_hour    DECIMAL (15,3)  NOT NULL ,
        qp_price_halfday DECIMAL (15,3)  NOT NULL ,
        qp_price_day     DECIMAL (15,3)  NOT NULL
	,CONSTRAINT quote_price_plumbing_PK PRIMARY KEY (qp_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_price_masonry
#------------------------------------------------------------

CREATE TABLE quote_price_masonry(
        qp_id            Int  Auto_increment  NOT NULL ,
        qp_price_hour    DECIMAL (15,3)  NOT NULL ,
        qp_price_halfday DECIMAL (15,3)  NOT NULL ,
        qp_price_day     DECIMAL (15,3)  NOT NULL
	,CONSTRAINT quote_price_masonry_PK PRIMARY KEY (qp_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_masonry_diy
#------------------------------------------------------------

CREATE TABLE quote_masonry_diy(
        qos_id             Int  Auto_increment  NOT NULL ,
        qos_detail         Varchar (255) NOT NULL ,
        qosi_number        Int NOT NULL ,
        qos_mail_customer  Varchar (255) NOT NULL ,
        qos_phone_customer Int NOT NULL ,
        cu_id              Int NOT NULL ,
        qp_id              Int NOT NULL
	,CONSTRAINT quote_masonry_diy_PK PRIMARY KEY (qos_id)

	,CONSTRAINT quote_masonry_diy_customers_FK FOREIGN KEY (cu_id) REFERENCES customers(cu_id)
	,CONSTRAINT quote_masonry_diy_quote_price_masonry0_FK FOREIGN KEY (qp_id) REFERENCES quote_price_masonry(qp_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_price_cut_garden
#------------------------------------------------------------

CREATE TABLE quote_price_cut_garden(
        qp_id            Int  Auto_increment  NOT NULL ,
        qp_price_hour    DECIMAL (15,3)  NOT NULL ,
        qp_price_halfday DECIMAL (15,3)  NOT NULL ,
        qp_price_day     DECIMAL (15,3)  NOT NULL
	,CONSTRAINT quote_price_cut_garden_PK PRIMARY KEY (qp_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quote_cut_garden
#------------------------------------------------------------

CREATE TABLE quote_cut_garden(
        dcj_id                Int  Auto_increment  NOT NULL ,
        dcj_surface           Int NOT NULL ,
        dcj_customer_material Bool NOT NULL ,
        dcj_date              Date NOT NULL ,
        dcj_detail            Varchar (255) NOT NULL ,
        dcj_mail_customer     Varchar (50) NOT NULL ,
        dcj_phone_customer    Varchar (10) NOT NULL ,
        cu_id                 Int NOT NULL ,




	=======================================================================
	   Désolé, il faut activer cette version pour voir la suite du script ! 
	=======================================================================
