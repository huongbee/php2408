CREATE TABLE `users` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(50) NOT NULL COMMENT 'this is cmt' , 
    `birthdate` DATE NULL DEFAULT NULL , 
    `avatar` VARCHAR(100) NULL DEFAULT NULL , 
    `gender` TINYTEXT NULL DEFAULT NULL ,
    PRIMARY KEY (`id`), 
    UNIQUE `unique_username` (`username`)
);

-- khoa chinh, email: duy nhat, password, gioi tinh, ngay sinh, 
-- dia chi, dien thoai
CREATE TABLE `customers` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `email` VARCHAR(50) NOT NULL, 
    `birthdate` DATE NULL DEFAULT NULL , 
    `gender` TINYTEXT NULL DEFAULT NULL ,
    `password` VARCHAR(100) NOT NULL ,
    `address` VARCHAR(100) NULL DEFAULT NULL ,  
    `phone` VARCHAR(20) NULL DEFAULT NULL , 
    PRIMARY KEY (`id`), 
    UNIQUE `unique_email` (`email`)
);
ALTER TABLE `customers` ADD `name` VARCHAR(100) NOT NULL AFTER `email`;


INSERT INTO customers
VALUES(7,'user@yahoo.com','Huy Phạm','2012-12-25','female','13131','92 LTR', '18273172')


INSERT INTO customers(email,birthdate,password,address,phone,name)
VALUES
    ('admin03@gmail.com','1993-2-24','##!#!^232','92 LTR','012168949','Phương'),
    ('admin04@gmail.com','1993-2-4','##!#!^232','92 LTR','012168949','Nam Nguyễn'),
    ('admin05@gmail.com','1993-2-24','##!#!^232','92 LTR','012168949','Mai Phương');

INSERT INTO `customers` (`id`, `email`, `name`, `birthdate`, `gender`, `password`, `address`, `phone`) 
VALUES ('12', 'huong@gmail.com', 'Hương', '2018-10-23', 'female', MD5('12321'), '234d ertfe ', '3423323');

-- bill: khoa chinh, customer_id, tong tien, so luong,
-- ngay mua hang, ngay giao hang, trang thai don hang
-- hinh thuc thanh toan
CREATE TABLE `php2408_test`.`bill` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `customer_id` INT NOT NULL , 
    `total` DOUBLE NOT NULL DEFAULT '0' , 
    `quantity` FLOAT NOT NULL DEFAULT '0' , 
    `date_order` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `date_delivery` DATETIME NULL DEFAULT NULL , 
    `status` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0_dhthanhcong, 1_danggiao, 2_dagiao, 3_bihuy' , 
    `payment_method` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0_cod, 1_online, 2_giuhang' , 
    PRIMARY KEY (`id`)
);

ALTER TABLE `bills` 
    ADD CONSTRAINT `fk_customer_bill` 
    FOREIGN KEY (`customer_id`) 
    REFERENCES `customers`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;  

INSERT INTO bills(customer_id, total, quantity, date_order,payment_method)
VALUES(5,20000,2,'2018-5-25 12:20:18',1)


UPDATE bills
SET date_delivery='2018-5-25 14:20:10',
    status=2
WHERE id=3 OR id=4