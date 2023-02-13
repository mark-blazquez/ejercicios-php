CREATE TABLE libro (
id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
titulo VARCHAR(30) NOT NULL,
autor VARCHAR(30) NOT NULL,
PRIMARY KEY (id)
);
INSERT INTO libro ( titulo, autor ) VALUES ( 'El Quijote', 'Cervantes' );
INSERT INTO libro (titulo, autor) VALUES ( 'Soledades', 'Gongora' );
INSERT INTO libro (titulo, autor) VALUES ( 'El asceta', 'Tagore' );
