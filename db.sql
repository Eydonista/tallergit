CREATE TABLE canal ( nombre VARCHAR(30) not null ,  email VARCHAR(30) not null UNIQUE, descripcion VARCHAR(100) null, PRIMARY KEY(nombre)) ENGINE = InnoDB;
CREATE TABLE video (id bigint(20) not null, titulo VARCHAR(30) not null, descripcion VARCHAR(30) null, url VARCHAR(100) not null UNIQUE, subida VARCHAR(30) not null, canal VARCHAR(30) not null, PRIMARY KEY(id), CONSTRAINT c_v FOREIGN KEY(canal) REFERENCES canal(nombre)) ENGINE=InnoDB;

INSERT INTO `parcial`.`canal` ( `nombre`, `email`, `descripcion`) VALUES ( 'disco', 'disco@email.x', 'bla bla bla'), ('xyzchannel', 'a@email.x', 'variado bla bla'), ( 'juegos', 'juegos@email.x', NULL);
INSERT INTO `parcial`.`video` (`id`, `titulo`, `descripcion`, `url`, `subida`, `canal`) VALUES ('11', 'mariobros', 'tutorial', 'www.mario.co/aaa', '12/12/12', 'juegos'), ('12', 'zelda', 'speedrun', 'www.zelda.co/dadsfa', '11/11/11', 'juegos'), ('13', 'bebe llorando', 'bebe es poseido', 'www.sa.fa/adfa', '10/10/10', 'xyzchannel'), ('14', 'virussssss', 'viruss', 'www.daf.afd/adfad', '8/8/12', 'disco'), ('15', 'remix ', 'musica variada', 'ww3.musica.s/daf', '9/9/14', 'disco');
