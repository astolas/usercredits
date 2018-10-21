#
# Table structure for table 'tx_usercredits_domain_model_credits'
#
CREATE TABLE tx_usercredits_domain_model_credits (
	uid int(11) NOT NULL auto_increment,

	title text,
	description text,
	amount int(11) DEFAULT '0' NOT NULL,
	fe_users int(11) DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
);

#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (

	credits int(11) DEFAULT '0' NOT NULL,

);
