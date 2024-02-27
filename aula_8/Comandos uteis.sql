# Mostrar as tabelas do banco de dados ATUAL
show tables;
# Mostrar a estrutura de uma tabela
describe transactions;
# Remover a tabela
drop table if exists clients;
# Alterar a estrutura da tabela
alter table clients modify column status tinyint unsigned not null;