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