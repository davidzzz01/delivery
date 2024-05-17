create database delivery;
use delivery;
select * from pedidos;
ALTER TABLE pedidos CHANGE COLUMN cep bairro VARCHAR(255);
drop table pedidos;
create table pedidos (nome_cliente varchar(55), telefone varchar (55), sabores varchar(55), acompanhamentos varchar(55));
alter table pedidos add column cep varchar(55), add column bairro varchar(55), add column rua varchar(55) after acompanhamentos;