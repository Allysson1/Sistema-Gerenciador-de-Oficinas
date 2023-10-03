create table usuario(
idUsuario int not null auto_increment Primary key, 
nome varchar(100) not null, 
usuario varchar(40) not null,
senha varchar(40) not null,
status char(1) default '',
email varchar(140) not null,
nivelFuncionario int not null
);

select * from usuario;


