SCRIPT
CREAT DATABASE `MOHFOODS`;
CREATE TABLE `admin` (
	`admin_id` INT NOT NULL AUTO_INCREMENT,
	`admin_username` VARCHAR (150) NOT NULL,
	`email_admin` VARCHAR (50) NOT NULL,
	`password_admin` VARCHAR (50) NOT NULL,
	`created_at` DATE,
	PRIMARY KEY (admin_id)
);
CREATE TABLE `order` (
	`order_id` INT NOT NULL AUTO_INCREMENT,
	`menu` VARCHAR(150) NOT NULL,
	`customername` VARCHAR (150) NOT NULL,
	`phone_num` INT(50) NOT NULL,
	`quantity_item` INT(50)NOT NULL,
	`total_item` INT(50) NOT NULL,
	`address_cust` VARCHAR(300) NOT NULL,
 	`admin_id` INT NOT NULL,
	`created_at` DATE,
	PRIMARY KEY (order_id),
	FOREIGN KEY (admin_id) REFERENCES admin (admin_id)
	);



Admin Information
INSERT INTO `admin`(`admin_username`,`email_admin`,`password_admin`, `created_at`)

VALUES ('olamide', 'olamidewunmi10@gmail.com', 'dufunaola10', '2018-10-10')
