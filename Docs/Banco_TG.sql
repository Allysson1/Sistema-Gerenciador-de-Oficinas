create table usuario(
idUsuario int not null auto_increment Primary key, 
nome varchar(100) not null, 
usuario varchar(40) not null,
senha varchar(40) not null,
status char(1) default '',
email varchar(140) not null,
nivelFuncionario int not null
);

create table pecas (
	idPeca int not null auto_increment Primary key,
	NomePeca varchar(100) not null,
	MarcaPeca varchar(6)not null,
    QtdPeca int not null ,
    DataPedido date not null,
    DataRecebimento date not null,
	DescricaoPeca varchar(200) not null,
	CnpjFornecedor bigint not null,
    Nome varchar (100) null,
	Path varchar(100) null,
	data_upload datetime default current_timestamp
);

create table fornecedores (
	CnpjFornecedor bigint not null Primary key,
    NomeFornecedor varchar(200) not null,
	TelFornecedor bigint not null
);


create table ordemServico(
idOrdemServico int not null auto_increment Primary key, 
placa char(7) not null, 
statusServico varchar(40) not null,
cliente bigint not null,
nomeVeiculo varchar(40) not null,
anoVeiculo varchar(20) not null,
tipoServico varchar(140) not null,
valor varchar(15) not null,
prazoEntrega date not null,
observacao varchar(600)
);


ALTER TABLE pecas ADD FOREIGN KEY (CnpjFornecedor)
REFERENCES fornecedores (CnpjFornecedor);


create table cliente(
	CPF bigint not null primary key,
    nome varchar(140) not null,
    contato bigint not null, 
    endereco varchar(200) not null,
    cidade varchar(60) not null,
    UF varchar(60) not null,
    statusCliente char(1) default ''
);