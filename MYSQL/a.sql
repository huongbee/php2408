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
    id INT NOT NULL AUTO_INCREMENT , 
    `email` VARCHAR(50) NOT NULL, 
    `birthdate` DATE NULL DEFAULT NULL , 
    `gender` TINYTEXT NULL DEFAULT NULL ,
    `password` VARCHAR(100) NOT NULL ,
    `address` VARCHAR(100) NULL DEFAULT NULL ,  
    `phone` VARCHAR(20) NULL DEFAULT NULL , 
    PRIMARY KEY (`id`), 
    UNIQUE `unique_email` (`email`)
);

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