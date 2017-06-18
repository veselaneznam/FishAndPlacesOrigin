CREATE TABLE cms_page
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    parent INT(11),
    description TEXT NOT NULL,
    slug VARCHAR(255) NOT NULL,
    is_navigation TINYINT(1) DEFAULT '1' NOT NULL,
    is_active TINYINT(1) DEFAULT '1' NOT NULL
);
CREATE UNIQUE INDEX cms_page_id_uindex ON cms_page (id);
CREATE UNIQUE INDEX cms_page_slug_uindex ON cms_page (slug);
CREATE TABLE dam
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    is_active TINYINT(1),
    rating FLOAT,
    name VARCHAR(255),
    price_pro_person VARCHAR(255),
    location VARCHAR(255),
    created_at DATETIME NOT NULL,
    updated_at DATETIME,
    contact_information TEXT,
    latitude FLOAT NOT NULL,
    longitude FLOAT,
    show_on_first_page TINYINT(1) DEFAULT '0' NOT NULL,
    description TEXT
);
CREATE UNIQUE INDEX dam_id_uindex ON green_object (id);
CREATE INDEX latitude_longtitide ON green_object (latitude, longitude);
CREATE TABLE dam_fish
(
    dam_id INT(11) NOT NULL,
    fish_id INT(11) NOT NULL,
    CONSTRAINT `PRIMARY` PRIMARY KEY (dam_id, fish_id),
    CONSTRAINT dam_fish_dam_fk FOREIGN KEY (dam_id) REFERENCES green_object (id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT dam_fish_fish_fk FOREIGN KEY (fish_id) REFERENCES fish (id)
);
CREATE INDEX dam_fish_dam_id_fk ON dam_fish (dam_id);
CREATE INDEX dam_fish_fish_id_fk ON dam_fish (fish_id);
CREATE TABLE dam_image
(
    is_main INT(11) DEFAULT '0' NOT NULL,
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    created_at DATETIME NOT NULL,
    updated_at DATETIME,
    image_src VARCHAR(255) NOT NULL,
    dam_id INT(11) NOT NULL,
    CONSTRAINT dam_image_dam_id_fk FOREIGN KEY (dam_id) REFERENCES green_object (id)
);
CREATE UNIQUE INDEX dam_image_id_uindex ON green_object_image (id);
CREATE INDEX dam_image_dam_id_fk ON green_object_image (green_object_id);
CREATE TABLE fish
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME,
    description TEXT,
    image VARCHAR(40),
    is_active TINYINT(1) DEFAULT '1' NOT NULL
);
CREATE UNIQUE INDEX fish_id_uindex ON fish (id);
CREATE TABLE geocoder
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    address VARCHAR(255) NOT NULL,
    latitude FLOAT NOT NULL,
    longitude FLOAT NOT NULL
);
CREATE UNIQUE INDEX geocoder_address_pk ON geocoder (address);
CREATE UNIQUE INDEX geocoder_id_uindex ON geocoder (id);
CREATE TABLE user
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(180) NOT NULL,
    username_canonical VARCHAR(180) NOT NULL,
    email VARCHAR(180) NOT NULL,
    email_canonical VARCHAR(180) NOT NULL,
    enabled TINYINT(1) NOT NULL,
    salt VARCHAR(255),
    password VARCHAR(255) NOT NULL,
    last_login DATETIME,
    confirmation_token VARCHAR(180),
    password_requested_at DATETIME,
    roles LONGTEXT NOT NULL COMMENT '(DC2Type:array)'
);
CREATE UNIQUE INDEX UNIQ_8D93D64992FC23A8 ON user (username_canonical);
CREATE UNIQUE INDEX UNIQ_8D93D649A0D96FBF ON user (email_canonical);
CREATE UNIQUE INDEX UNIQ_8D93D649C05FB297 ON user (confirmation_token);
